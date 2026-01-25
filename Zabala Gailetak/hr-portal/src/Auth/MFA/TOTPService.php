<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Auth\MFA;

use Exception;

/**
 * TOTP Service para autenticación de dos factores (Zero Dependency)
 *
 * Implementa Time-based One-Time Password (RFC 6238)
 * de forma nativa sin librerías externas.
 */
class TOTPService
{
    private string $issuer;
    private int $period = 30; // 30 segundos
    private int $digits = 6;
    private string $digest = 'sha1';

    private const BASE32_CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';

    public function __construct(array $config = [])
    {
        $this->issuer = $config['totp_issuer'] ?? 'Zabala Gailetak HR Portal';
        $this->period = $config['totp_period'] ?? 30;
        $this->digits = $config['totp_digits'] ?? 6;
    }

    /**
     * Genera un secreto TOTP (Base32) para un nuevo usuario
     */
    public function generateSecret(int $length = 16): string
    {
        $secret = '';
        for ($i = 0; $i < $length; $i++) {
            $secret .= self::BASE32_CHARS[random_int(0, 31)];
        }
        return $secret;
    }

    /**
     * Genera la URI de configuración para QR code
     */
    public function getQrCodeUri(string $secret, string $userEmail): string
    {
        $label = urlencode($this->issuer) . ':' . urlencode($userEmail);
        $parameters = [
            'secret' => $secret,
            'issuer' => $this->issuer,
            'algorithm' => strtoupper($this->digest),
            'digits' => $this->digits,
            'period' => $this->period,
        ];

        return 'otpauth://totp/' . $label . '?' . http_build_query($parameters);
    }

    /**
     * Genera el código QR como imagen base64
     */
    public function generateQrCodeImage(string $secret, string $userEmail): string
    {
        $uri = $this->getQrCodeUri($secret, $userEmail);

        // Usar Google Charts API para generar QR (o cualquier otro servicio público)
        $qrUrl = sprintf(
            'https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=%s',
            urlencode($uri)
        );

        // Obtener imagen y convertir a base64
        $imageData = @file_get_contents($qrUrl);

        if ($imageData === false) {
            return $qrUrl;
        }

        return 'data:image/png;base64,' . base64_encode($imageData);
    }

    /**
     * Verifica un código TOTP
     */
    public function verifyCode(string $secret, string $code, int $window = 1): bool
    {
        if (!$this->isValidCodeFormat($code)) {
            return false;
        }

        $currentTime = time();
        
        for ($i = -$window; $i <= $window; $i++) {
            $timestamp = $currentTime + ($i * $this->period);
            if (hash_equals($this->generateCode($secret, $timestamp), $code)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Genera el código actual para un secreto
     */
    public function getCurrentCode(string $secret): string
    {
        return $this->generateCode($secret, time());
    }

    /**
     * Genera un código TOTP para un timestamp dado
     */
    private function generateCode(string $secret, int $timestamp): string
    {
        $timeSlice = floor($timestamp / $this->period);
        
        // Pack time into 8 bytes (big endian)
        $timePacked = pack('N*', 0) . pack('N*', $timeSlice);
        
        // Decode secret from Base32
        $secretDecoded = $this->base32Decode($secret);
        
        // Calculate HMAC-SHA1
        $hash = hash_hmac($this->digest, $timePacked, $secretDecoded, true);
        
        // Dynamic truncation
        $offset = ord(substr($hash, -1)) & 0x0F;
        $binary = (ord(substr($hash, $offset, 1)) & 0x7F) << 24
                | (ord(substr($hash, $offset + 1, 1)) & 0xFF) << 16
                | (ord(substr($hash, $offset + 2, 1)) & 0xFF) << 8
                | (ord(substr($hash, $offset + 3, 1)) & 0xFF);

        $otp = $binary % (10 ** $this->digits);
        
        return str_pad((string)$otp, $this->digits, '0', STR_PAD_LEFT);
    }

    /**
     * Decodifica Base32
     */
    private function base32Decode(string $base32): string
    {
        $base32 = strtoupper($base32);
        $l = strlen($base32);
        $n = 0;
        $j = 0;
        $binary = '';

        for ($i = 0; $i < $l; $i++) {
            $n = $n << 5;
            $n = $n + strpos(self::BASE32_CHARS, $base32[$i]);
            $j = $j + 5;

            if ($j >= 8) {
                $j = $j - 8;
                $binary .= chr(($n & (0xFF << $j)) >> $j);
            }
        }

        return $binary;
    }

    /**
     * Genera códigos de respaldo para recuperación
     */
    public function generateBackupCodes(int $count = 10): array
    {
        $codes = [];

        for ($i = 0; $i < $count; $i++) {
            $code = strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
            $formatted = substr($code, 0, 4) . '-' . substr($code, 4, 4);
            $codes[] = $formatted;
        }

        return $codes;
    }

    /**
     * Hashea códigos de respaldo
     */
    public function hashBackupCodes(array $codes): array
    {
        return array_map(function ($code) {
            $cleanCode = str_replace('-', '', $code);
            return password_hash($cleanCode, PASSWORD_BCRYPT);
        }, $codes);
    }

    /**
     * Verifica un código de respaldo
     */
    public function verifyBackupCode(string $code, array $hashedCodes): ?int
    {
        $cleanCode = str_replace('-', '', strtoupper($code));

        foreach ($hashedCodes as $index => $hashedCode) {
            if (password_verify($cleanCode, $hashedCode)) {
                return $index;
            }
        }

        return null;
    }

    /**
     * Valida el formato de un código TOTP
     */
    public function isValidCodeFormat(string $code): bool
    {
        return ctype_digit($code) && strlen($code) === $this->digits;
    }

    public function getTimeRemaining(): int
    {
        return $this->period - (time() % $this->period);
    }

    public function getMfaSetupInfo(string $secret, string $userEmail): array
    {
        return [
            'secret' => $secret,
            'secret_formatted' => $this->formatSecretForDisplay($secret),
            'qr_code_uri' => $this->getQrCodeUri($secret, $userEmail),
            'qr_code_image' => $this->generateQrCodeImage($secret, $userEmail),
            'issuer' => $this->issuer,
            'account' => $userEmail,
            'period' => $this->period,
            'digits' => $this->digits,
            'algorithm' => strtoupper($this->digest)
        ];
    }

    private function formatSecretForDisplay(string $secret): string
    {
        return implode(' ', str_split($secret, 4));
    }
}
<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Controllers\Web;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;
use ZabalaGailetak\HrPortal\Database\Database;

class WebAuthController
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function loginForm(Request $request): Response
    {
        // If already logged in, redirect to dashboard
        if (isset($_SESSION['user_id'])) {
            return Response::redirect('/dashboard');
        }

        return Response::view('auth/login');
    }

    public function login(Request $request): Response
    {
        $data = $request->getParsedBody();
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        if (empty($email) || empty($password)) {
            return Response::view('auth/login', ['error' => 'Email y contraseña requeridos']);
        }

        // Real Database Authentication
        try {
            $stmt = $this->db->prepare('SELECT id, email, password_hash, role, mfa_enabled FROM users WHERE email = :email');
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password_hash'])) {
                // Login Success
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_name'] = 'Admin'; // Todo: Fetch from employees table

                // Optional: Check MFA here if needed
                
                return Response::redirect('/dashboard');
            }
        } catch (\Exception $e) {
            error_log("Login error: " . $e->getMessage());
            return Response::view('auth/login', ['error' => 'Error del sistema']);
        }

        return Response::view('auth/login', ['error' => 'Credenciales incorrectas']);
    }

    public function logout(Request $request): Response
    {
        session_destroy();
        return Response::redirect('/login');
    }
}

<?php
// Script de Diagnóstico para InfinityFree
// Subido por Gemini Agent

// 1. Configuración Básica
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Diagnóstico Zabala Gailetak</h1>";
echo "<pre>";

// 2. Información del Sistema
echo "<h2>1. Entorno PHP</h2>";
echo "PHP Version: " . phpversion() . "\n";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Current Dir: " . __DIR__ . "\n";

// 3. Verificación de Archivos Críticos
echo "<h2>2. Estructura de Archivos</h2>";
$rootDir = dirname(__DIR__); // hr-portal root (fuera de public)
$files = [
    '.env' => $rootDir . '/.env',
    'src/Core/EnvLoader.php' => $rootDir . '/src/Core/EnvLoader.php',
    'config/config.php' => $rootDir . '/config/config.php',
    'vendor/autoload.php' => $rootDir . '/vendor/autoload.php' // No debería existir
];

foreach ($files as $name => $path) {
    if (file_exists($path)) {
        echo "[OK] $name encontrado";
        if ($name === '.env') {
            echo " (Permisos: " . substr(sprintf('%o', fileperms($path)), -4) . ")";
            // Intento de lectura seguro
            $content = file_get_contents($path);
            if ($content !== false) {
                echo " - Legible (" . strlen($content) . " bytes)";
            } else {
                echo " - NO LEGIBLE";
            }
        }
        echo "\n";
    } else {
        echo "[ERROR] $name NO encontrado en $path\n";
    }
}

// 4. Prueba de Carga de Entorno (Simulación Manual)
echo "<h2>3. Carga de Variables de Entorno</h2>";
if (file_exists($rootDir . '/.env')) {
    $lines = file($rootDir . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "Leyendo .env...\n";
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        $parts = explode('=', $line, 2);
        if (count($parts) === 2) {
            $key = trim($parts[0]);
            // Ocultar valores sensibles
            $val = str_contains($key, 'PASS') || str_contains($key, 'SECRET') ? '***' : trim($parts[1]);
            echo "  $key = $val\n";
        }
    }
} else {
    echo "No se puede probar carga de entorno sin archivo .env\n";
}

// 5. Prueba de Conexión a Base de Datos
echo "<h2>4. Conexión MySQL (Prueba Directa)</h2>";
// Extraer credenciales manualmente para evitar depender del framework fallido
$dbHost = 'sql107.infinityfree.com';
$dbName = 'if0_40982238_zabala_gailetak';
$dbUser = 'if0_40982238';
$dbPass = '70fbmkPvaTRNl';

echo "Intentando conectar a $dbHost (DB: $dbName) con usuario $dbUser...\n";

try {
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4;port=3306";
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 5
    ]);
    echo "[EXITO] Conexión establecida correctamente.\n";
    
    // Verificar tablas
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "Tablas encontradas: " . implode(", ", $tables) . "\n";
    
} catch (PDOException $e) {
    echo "[FALLO] Error de conexión: " . $e->getMessage() . "\n";
}

echo "</pre>";


<?php
// Script de Migración Web para InfinityFree
// Advertencia: Eliminar después de usar

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT_PATH', dirname(__DIR__));

// Load Core
require ROOT_PATH . '/src/Core/ClassLoader.php';
\ZabalaGailetak\HrPortal\Core\ClassLoader::register();
\ZabalaGailetak\HrPortal\Core\EnvLoader::load(ROOT_PATH);
\ZabalaGailetak\HrPortal\Core\EnvLoader::ensurePopulated();

use ZabalaGailetak\HrPortal\Database\Database;
use ZabalaGailetak\HrPortal\Services\AuditLogger; // Assuming AuditLogger is needed for migrations

echo "<h1>Migración de Base de Datos</h1>";

try {
    $db = new Database();
    $conn = $db->getConnection();
    echo "<p>✅ Conexión establecida</p>";
    
    // Get all sql files
    $migrationFiles = glob(ROOT_PATH . '/migrations/*.sql');
    sort($migrationFiles); // Ensure order (001, 002...)
    
    // Get the current database driver from config
    $dbDriver = $db->config['database']['driver'] ?? 'pgsql'; // Access config safely

    foreach ($migrationFiles as $file) {
        $filename = basename($file);
        echo "<hr><h3>Procesando: $filename</h3>";
        
        $sql = file_get_contents($file);
        
        // Apply MySQL compatibility fixes
        if ($dbDriver === 'mysql') {
            // Remove PostgreSQL Extensions
            $sql = preg_replace('/CREATE EXTENSION IF NOT EXISTS ".*?";/i', '', $sql);
            
            // SERIAL -> INT AUTO_INCREMENT
            $sql = str_ireplace('SERIAL PRIMARY KEY', 'INT AUTO_INCREMENT PRIMARY KEY', $sql);
            $sql = str_ireplace('SERIAL', 'INT AUTO_INCREMENT', $sql);
            
            // UUID defaults: gen_random_uuid() is PostgreSQL. MySQL 8+ uses UUID() or random_uuid().
            // For wider compatibility, let's replace with VARCHAR(36) and rely on PHP for ID generation if needed.
            // Or assume application logic handles this. For schema, VARCHAR(36) is standard.
            $sql = preg_replace('/UUID PRIMARY KEY DEFAULT gen_random_uuid\(\)/i', 'VARCHAR(36) PRIMARY KEY', $sql);
            $sql = preg_replace('/DEFAULT gen_random_uuid\(\)/i', '', $sql); // Remove default if not primary key
            $sql = str_ireplace('UUID', 'VARCHAR(36)', $sql); // General UUID type replacement
            
            // Fix boolean defaults (PostgreSQL true/false -> MySQL 1/0)
            $sql = str_ireplace("DEFAULT true", "DEFAULT 1", $sql);
            $sql = str_ireplace("DEFAULT false", "DEFAULT 0", $sql);
            
            // Timestamps: CURRENT_TIMESTAMP is standard, but ensure consistency
            $sql = str_ireplace("TIMESTAMP DEFAULT CURRENT_TIMESTAMP", "TIMESTAMP DEFAULT CURRENT_TIMESTAMP", $sql);
            
            // Remove ON CONFLICT (Use INSERT IGNORE or REPLACE INTO in application logic)
            // This regex might need refinement, assumes ON CONFLICT ends a statement or is on its own line
            $sql = preg_replace('/ON CONFLICT[^;]*;/s', ';', $sql);

            // Fix JSONB -> JSON
            $sql = str_ireplace('JSONB', 'JSON', $sql);
        }
        
        // Execute SQL statements
        // Use exec for DDL statements that might not return result sets easily
        $stmt = $db->getConnection()->prepare($sql);
        
        // For queries with multiple statements separated by ';', exec might be better.
        // But PDO::exec doesn't support multiple statements well.
        // If needed, we'd split $sql by ';' and loop. For now, try with execute.
        if ($stmt->execute()) {
             echo "<p style='color:green'>✅ Ejecutado correctamente: $filename</p>";
        } else {
            // Fetching error info can be useful
            $errorInfo = $stmt->errorInfo();
            echo "<p style='color:red'>❌ Error en $filename: " . ($errorInfo[2] ?? 'Unknown error') . "</p>";
        }
    }
    
    echo "<hr><h2>✅ Migración Completada</h2>";
    echo "<p>Ahora puedes borrar este archivo y acceder al <a href='/'>Portal</a></p>";

} catch (Throwable $e) {
    error_log("Migration Error: " . $e->getMessage() . "\n" . $e->getTraceAsString());
    http_response_code(500);
    
    // Friendly error page for migration failures
    echo "<h1>Error en la Migración</h1>";
    echo "<p>No se pudo completar la inicialización de la base de datos.</p>";
    if (("true" ?? 'false') === 'true') {
        echo "<pre>Error: " . htmlspecialchars($e->getMessage()) . "</pre>";
        echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    } else {
        echo "<p>Por favor, contacta con el administrador.</p>";
    }
}
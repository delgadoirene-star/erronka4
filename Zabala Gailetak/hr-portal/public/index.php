<?php

declare(strict_types=1);

/**
 * Front Controller - Entry point for all requests
 * 
 * @package HrPortal
 * @author Zabala Gailetak
 */

use ZabalaGailetak\HrPortal\App;

// Define root path
define('ROOT_PATH', dirname(__DIR__));

// Load Native Autoloader (Zero Trust)
require ROOT_PATH . '/src/Core/ClassLoader.php';
\ZabalaGailetak\HrPortal\Core\ClassLoader::register();

// Load environment variables (Native)
\ZabalaGailetak\HrPortal\Core\EnvLoader::load(ROOT_PATH);

// Error handling based on environment
if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'production') {
    error_reporting(0);
    ini_set('display_errors', '0');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

// Initialize application
try {
    $app = new App();
    $app->run();
} catch (\Throwable $e) {
    // Log error
    error_log($e->getMessage());
    
    // Show error page
    http_response_code(500);
    if (($_ENV['APP_DEBUG'] ?? 'false') === 'true') {
        echo '<h1>Error</h1>';
        echo '<pre>' . $e->getMessage() . '</pre>';
        echo '<pre>' . $e->getTraceAsString() . '</pre>';
    } else {
        echo '<h1>500 Internal Server Error</h1>';
        echo '<p>An unexpected error occurred. Please try again later.</p>';
    }
}

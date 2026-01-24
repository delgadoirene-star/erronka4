<?php

declare(strict_types=1);

// Define ROOT_PATH constant for tests
define('ROOT_PATH', dirname(__DIR__));

// Load Native Autoloader (Zero Trust)
require_once ROOT_PATH . '/src/Core/Autoloader.php';
\ZabalaGailetak\HrPortal\Core\Autoloader::register();

// Load environment variables for testing (Native)
\ZabalaGailetak\HrPortal\Core\DotEnv::load(ROOT_PATH);

// Set testing environment
$_ENV['APP_ENV'] = 'testing';

// Initialize test database if needed
// You can add database seeding or test data initialization here
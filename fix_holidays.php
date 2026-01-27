<?php

// Fix public_holidays table for vacation functionality
// Simple standalone script that doesn't require framework

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details - adjust as needed
$db_host = 'localhost';
$db_name = 'if0_40982238_zabala_gailetak'; 
$db_user = 'if0_40982238';
$db_pass = ''; // Add password if needed

try {
    // Create database connection
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Connected to database successfully\n";
    
    // Step 1: Check if table exists
    echo "🔍 Checking if public_holidays table exists...\n";
    $result = $pdo->query("SHOW TABLES LIKE 'public_holidays'");
    
    if ($result->rowCount() == 0) {
        echo "📋 Creating public_holidays table...\n";
        
        $createSQL = "
        CREATE TABLE public_holidays (
            id INT AUTO_INCREMENT PRIMARY KEY,
            holiday_date DATE NOT NULL UNIQUE,
            name_eu VARCHAR(100) NOT NULL,
            name_es VARCHAR(100) NOT NULL,
            is_national BOOLEAN DEFAULT FALSE,
            is_regional BOOLEAN DEFAULT FALSE,
            is_local BOOLEAN DEFAULT FALSE,
            year INT GENERATED ALWAYS AS (YEAR(holiday_date)) STORED,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_holiday_date (holiday_date),
            INDEX idx_year (year)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        
        $pdo->exec($createSQL);
        echo "✅ Table public_holidays created successfully\n";
    } else {
        echo "✅ Table public_holidays already exists\n";
    }
    
    // Step 2: Clear existing 2026 holidays
    echo "🗑️  Clearing existing 2026 holidays...\n";
    $pdo->exec("DELETE FROM public_holidays WHERE year = 2026");
    
    // Step 3: Insert 2026 Spanish holidays
    echo "📅 Inserting 2026 Spanish holidays...\n";
    
    $holidays = [
        ['2026-01-01', 'Urteberri Eguna', 'Año Nuevo', true, false],
        ['2026-01-06', 'Errekeen Eguna', 'Reyes Magos', true, false],
        ['2026-04-03', 'Ostiral Santua', 'Viernes Santo', true, false],
        ['2026-04-06', 'Pazko Astelehena', 'Lunes de Pascua', false, true],
        ['2026-05-01', 'Langileen Eguna', 'Día del Trabajo', true, false],
        ['2026-07-25', 'Santiago Apostolua', 'Santiago Apóstol', true, false],
        ['2026-08-15', 'Andra Maria', 'Asunción', true, false],
        ['2026-10-12', 'Hispanitate Eguna', 'Fiesta Nacional', true, false],
        ['2026-11-01', 'Santu Guztien Eguna', 'Todos los Santos', true, false],
        ['2026-12-06', 'Konstituzioa', 'Constitución', true, false],
        ['2026-12-08', 'Sortzez Garbia', 'Inmaculada Concepción', true, false],
        ['2026-12-25', 'Gabonak', 'Navidad', true, false]
    ];
    
    $insertSQL = "
    INSERT INTO public_holidays 
    (holiday_date, name_eu, name_es, is_national, is_regional) 
    VALUES (?, ?, ?, ?, ?)
    ";
    
    $stmt = $pdo->prepare($insertSQL);
    $insertedCount = 0;
    
    foreach ($holidays as $holiday) {
        try {
            $stmt->execute($holiday);
            $insertedCount++;
            echo "  ✅ " . $holiday[0] . ": " . $holiday[2] . "\n";
        } catch (Exception $e) {
            echo "  ❌ Failed to insert " . $holiday[0] . ": " . $e->getMessage() . "\n";
        }
    }
    
    // Step 4: Verify results
    echo "\n📊 Verification:\n";
    
    $countSQL = "SELECT COUNT(*) as total FROM public_holidays WHERE year = 2026";
    $result = $pdo->query($countSQL);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo "  📅 Total 2026 holidays: " . $row['total'] . "\n";
    echo "  ✅ Successfully inserted: $insertedCount\n";
    
    // Step 5: Test vacation functionality
    echo "\n🧪 Testing vacation functionality...\n";
    
    // Test getPublicHolidays method equivalent
    $testSQL = "SELECT holiday_date FROM public_holidays WHERE year = 2026 ORDER BY holiday_date";
    $result = $pdo->query($testSQL);
    $holidaysList = $result->fetchAll(PDO::FETCH_COLUMN);
    
    echo "  📋 Found " . count($holidaysList) . " holidays:\n";
    foreach ($holidaysList as $holiday) {
        echo "    - $holiday\n";
    }
    
    echo "\n🎉 Public holidays setup completed successfully!\n";
    echo "💡 Vacation request functionality should now work properly.\n";
    echo "🔗 You can now test the vacation request form.\n";
    
} catch (PDOException $e) {
    echo "❌ Database Error: " . $e->getMessage() . "\n";
    echo "🔧 Please check your database connection details:\n";
    echo "   - Host: $db_host\n";
    echo "   - Database: $db_name\n";
    echo "   - User: $db_user\n";
    exit(1);
} catch (Exception $e) {
    echo "❌ General Error: " . $e->getMessage() . "\n";
    echo "📋 Stack trace: " . $e->getTraceAsString() . "\n";
    exit(1);
}
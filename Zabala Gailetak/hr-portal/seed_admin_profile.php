<?php

declare(strict_types=1);

/**
 * Admin Profile Seeder
 * 
 * Creates the admin@zabalagailetak.com user with complete employee profile
 * Run this script to seed the admin user with proper employee data
 */

require_once __DIR__ . '/../vendor/autoload.php';

use ZabalaGailetak\HrPortal\Database\Database;

// Initialize database connection
try {
    $db = new Database();
    $pdo = $db->getConnection();
} catch (Exception $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "\n";
    exit(1);
}

echo "🌱 Starting admin profile seeder...\n";

try {
    // Start transaction
    $pdo->beginTransaction();
    
    // 1. Check if admin user already exists
    $stmt = $pdo->prepare("SELECT id, email FROM users WHERE email = :email");
    $stmt->execute(['email' => 'admin@zabalagailetak.com']);
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($existingUser) {
        echo "ℹ️  Admin user already exists: " . $existingUser['email'] . "\n";
        $userId = $existingUser['id'];
    } else {
        // 2. Create admin user
        echo "👤 Creating admin user...\n";
        
        // Generate UUID for user
        $userId = $pdo->query("SELECT UUID() as uuid")->fetch(PDO::FETCH_ASSOC)['uuid'];
        
        // Password hash for "Admin123!" (same as in migration)
        $passwordHash = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        
        $stmt = $pdo->prepare("
            INSERT INTO users (id, email, password_hash, role, mfa_enabled, is_active, created_at, updated_at)
            VALUES (:id, :email, :password_hash, :role, :mfa_enabled, :is_active, NOW(), NOW())
        ");
        
        $stmt->execute([
            'id' => $userId,
            'email' => 'admin@zabalagailetak.com',
            'password_hash' => $passwordHash,
            'role' => 'admin',
            'mfa_enabled' => false,
            'is_active' => true
        ]);
        
        echo "✅ Admin user created successfully\n";
    }
    
    // 3. Check if employee profile already exists
    $stmt = $pdo->prepare("SELECT id FROM employees WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);
    $existingEmployee = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($existingEmployee) {
        echo "ℹ️  Employee profile already exists for admin user\n";
        $employeeId = $existingEmployee['id'];
    } else {
        // 4. Get or create IT department
        echo "🏢 Ensuring IT department exists...\n";
        
        $stmt = $pdo->prepare("SELECT id FROM departments WHERE name = 'IT' LIMIT 1");
        $stmt->execute();
        $department = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($department) {
            $departmentId = $department['id'];
        } else {
            // Create IT department
            $departmentId = $pdo->query("SELECT UUID() as uuid")->fetch(PDO::FETCH_ASSOC)['uuid'];
            
            $stmt = $pdo->prepare("
                INSERT INTO departments (id, name, description, created_at, updated_at)
                VALUES (:id, :name, :description, NOW(), NOW())
            ");
            
            $stmt->execute([
                'id' => $departmentId,
                'name' => 'IT',
                'description' => 'Departamento de tecnologías de la información'
            ]);
            
            echo "✅ IT department created\n";
        }
        
        // 5. Create employee profile
        echo "👔 Creating employee profile...\n";
        
        $employeeId = $pdo->query("SELECT UUID() as uuid")->fetch(PDO::FETCH_ASSOC)['uuid'];
        
        $stmt = $pdo->prepare("
            INSERT INTO employees (
                id, user_id, first_name, last_name, position, department_id, 
                hire_date, salary, is_active, created_at, updated_at
            ) VALUES (
                :id, :user_id, :first_name, :last_name, :position, :department_id,
                :hire_date, :salary, :is_active, NOW(), NOW()
            )
        ");
        
        $stmt->execute([
            'id' => $employeeId,
            'user_id' => $userId,
            'first_name' => 'Administrador',
            'last_name' => 'Sistema',
            'position' => 'Administrador del Sistema',
            'department_id' => $departmentId,
            'hire_date' => date('Y-m-d'), // Current date
            'salary' => 0.00, // Admin doesn't need salary in demo
            'is_active' => true
        ]);
        
        echo "✅ Employee profile created successfully\n";
    }
    
    // 6. Log the seeding action (simplified for seeder)
    echo "📋 Creating audit log entry...\n";
    
    $stmt = $pdo->prepare("
        INSERT INTO audit_logs (id, user_id, action, entity_type, entity_id, details, ip_address, user_agent, created_at)
        VALUES (UUID(), :user_id, :action, :entity_type, :entity_id, :details, :ip_address, :user_agent, NOW())
    ");
    
    $stmt->execute([
        'user_id' => $userId,
        'action' => 'admin_profile_seeded',
        'entity_type' => 'system',
        'entity_id' => $userId,
        'details' => 'Admin profile and employee data seeded successfully',
        'ip_address' => '127.0.0.1',
        'user_agent' => 'Admin Seeder'
    ]);
    
    // Commit transaction
    $pdo->commit();
    
    echo "\n🎉 Admin profile seeding completed successfully!\n";
    echo "📧 Email: admin@zabalagailetak.com\n";
    echo "🔑 Password: Admin123!\n";
    echo "👤 Role: admin\n";
    echo "🏢 Department: IT\n";
    echo "💼 Position: Administrador del Sistema\n";
    
} catch (Exception $e) {
    // Rollback on error
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    
    echo "❌ Seeding failed: " . $e->getMessage() . "\n";
    echo "📄 Error details: " . $e->getTraceAsString() . "\n";
    exit(1);
}

echo "\n✨ Done! You can now login with the admin credentials.\n";
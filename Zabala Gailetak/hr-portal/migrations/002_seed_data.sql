-- ============================================================================
-- SEED DATA: HR Portal
-- Version: 1.0
-- Date: 2026-01-23
-- ============================================================================

-- Create admin user
-- Password:secure_password_123 (hashed with bcrypt)
INSERT INTO users (id, email, password_hash, role, mfa_enabled)
VALUES (
    '550e8400-e29b-41d4-a716-446655440000',
    'admin@zabalagailetak.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', -- secure_password_123
    'admin',
    FALSE
) ON CONFLICT (email) DO NOTHING;

-- Create default departments
INSERT INTO departments (id, name, description) VALUES
('d10e8400-e29b-41d4-a716-446655440001', 'Administrazioa', 'Enpresaren kudeaketa eta administrazio orokorra'),
('d10e8400-e29b-41d4-a716-446655440002', 'Ekoizpena', 'Gaileten ekoizpen lerroak eta lantegia'),
('d10e8400-e29b-41d4-a716-446655440003', 'IKT/Segurtasuna', 'Sistemen kudeaketa eta zibersegurtasuna'),
('d10e8400-e29b-41d4-a716-446655440004', 'Giza Baliabideak', 'Langileen kudeaketa eta hautaketa')
ON CONFLICT (id) DO NOTHING;

-- Create admin employee profile
INSERT INTO employees (
    id, user_id, employee_number, first_name, last_name, nif, 
    position, department_id, hire_date, active
) VALUES (
    'e10e8400-e29b-41d4-a716-446655440000',
    '550e8400-e29b-41d4-a716-446655440000',
    'EMP20260001',
    'Administratzaile',
    'Nagusia',
    '12345678Z',
    'Sistemen Administratzailea',
    'd10e8400-e29b-41d4-a716-446655440003',
    '2026-01-01',
    TRUE
) ON CONFLICT (user_id) DO NOTHING;

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $isEdit ? 'Langilean Editatu' : 'Langile Berria Sortu' ?> - Zabala Gailetak HR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .nav {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .nav a {
            color: #2c3e50;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .nav a:hover {
            background: #ecf0f1;
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .breadcrumb {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: #3498db;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .form-header {
            background: white;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #7f8c8d;
        }

        .alert {
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border-left: 4px solid #721c24;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left: 4px solid #155724;
        }

        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .form-section {
            margin-bottom: 2.5rem;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #ecf0f1;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-weight: 500;
            color: #2c3e50;
            font-size: 0.95rem;
        }

        .form-label .required {
            color: #e74c3c;
        }

        .form-input,
        .form-select,
        .form-textarea {
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-help {
            font-size: 0.85rem;
            color: #7f8c8d;
        }

        .form-error {
            font-size: 0.85rem;
            color: #e74c3c;
        }

        .input-error {
            border-color: #e74c3c;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            padding-top: 2rem;
            border-top: 1px solid #ecf0f1;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.875rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background: #2980b9;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #95a5a6;
            color: white;
        }

        .btn-secondary:hover {
            background: #7f8c8d;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📊 Zabala Gailetak - Giza Baliabideak</h1>
    </div>

    <nav class="nav">
        <a href="/dashboard">Hasiera</a>
        <a href="/employees">Langileak</a>
        <a href="/vacations">Oporrak</a>
        <a href="/payrolls">Nominen</a>
        <a href="/documents">Dokumentuak</a>
        <a href="/profile">Profila</a>
        <a href="/logout" style="margin-left: auto;">Irten</a>
    </nav>

    <div class="container">
        <div class="breadcrumb">
            <a href="/dashboard">Hasiera</a> / 
            <a href="/employees">Langileak</a> / 
            <span><?= $isEdit ? 'Editatu' : 'Berria Sortu' ?></span>
        </div>

        <div class="form-header">
            <h2><?= $isEdit ? '✏️ Langilean Editatu' : '➕ Langile Berria Sortu' ?></h2>
            <p><?= $isEdit ? 'Aldatu langilearen datuak behar bezala.' : 'Bete formulario hau langile berri bat sortzeko.' ?></p>
        </div>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <strong>⚠️ Erroreak:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1.5rem;">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form id="employee-form" method="POST" action="<?= $isEdit ? '/employees/' . $employee['id'] : '/employees' ?>" class="form-container">
            <?php if ($isEdit): ?>
                <input type="hidden" name="_method" value="PUT">
            <?php endif; ?>
            
            <!-- Personal Information -->
            <div class="form-section">
                <h3 class="section-title">📋 Informazio Pertsonala</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="first_name">
                            Izena <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="first_name" 
                            name="first_name" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['first_name'] ?? '') ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="last_name">
                            Abizena <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="last_name" 
                            name="last_name" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['last_name'] ?? '') ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="nif">
                            NAN <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nif" 
                            name="nif" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['nif'] ?? '') ?>"
                            pattern="[0-9]{8}[A-Z]"
                            placeholder="12345678A"
                            required
                        >
                        <span class="form-help">Formatua: 8 zenbaki + letra</span>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="birth_date">
                            Jaiotza Data <span class="required">*</span>
                        </label>
                        <input 
                            type="date" 
                            id="birth_date" 
                            name="birth_date" 
                            class="form-input"
                            value="<?= $employee['birth_date'] ?? '' ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="gender">
                            Generoa
                        </label>
                        <select id="gender" name="gender" class="form-select">
                            <option value="">Aukeratu...</option>
                            <option value="M" <?= ($employee['gender'] ?? '') === 'M' ? 'selected' : '' ?>>Gizona</option>
                            <option value="F" <?= ($employee['gender'] ?? '') === 'F' ? 'selected' : '' ?>>Emakumea</option>
                            <option value="O" <?= ($employee['gender'] ?? '') === 'O' ? 'selected' : '' ?>>Bestea</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="nationality">
                            Nazionalitatea
                        </label>
                        <input 
                            type="text" 
                            id="nationality" 
                            name="nationality" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['nationality'] ?? '') ?>"
                            placeholder="Espainiako"
                        >
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="form-section">
                <h3 class="section-title">📞 Harremanetarako Datuak</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="email">
                            Email <span class="required">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['email'] ?? '') ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">
                            Telefonoa
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['phone'] ?? '') ?>"
                            placeholder="+34 600 000 000"
                        >
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="address">
                            Helbidea
                        </label>
                        <input 
                            type="text" 
                            id="address" 
                            name="address" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['address'] ?? '') ?>"
                            placeholder="Kale Nagusia, 123"
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="city">
                            Hiria
                        </label>
                        <input 
                            type="text" 
                            id="city" 
                            name="city" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['city'] ?? '') ?>"
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="postal_code">
                            Posta Kodea
                        </label>
                        <input 
                            type="text" 
                            id="postal_code" 
                            name="postal_code" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['postal_code'] ?? '') ?>"
                            pattern="[0-9]{5}"
                            placeholder="20000"
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="province">
                            Probintzia
                        </label>
                        <input 
                            type="text" 
                            id="province" 
                            name="province" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['province'] ?? '') ?>"
                        >
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <div class="form-section">
                <h3 class="section-title">🚨 Larrialdietarako Kontaktua</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="emergency_contact_name">
                            Izena
                        </label>
                        <input 
                            type="text" 
                            id="emergency_contact_name" 
                            name="emergency_contact_name" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['emergency_contact_name'] ?? '') ?>"
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="emergency_contact_phone">
                            Telefonoa
                        </label>
                        <input 
                            type="tel" 
                            id="emergency_contact_phone" 
                            name="emergency_contact_phone" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['emergency_contact_phone'] ?? '') ?>"
                        >
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="emergency_contact_relationship">
                            Harremana
                        </label>
                        <input 
                            type="text" 
                            id="emergency_contact_relationship" 
                            name="emergency_contact_relationship" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['emergency_contact_relationship'] ?? '') ?>"
                            placeholder="Senarra, alaba, anaia..."
                        >
                    </div>
                </div>
            </div>

            <!-- Work Information -->
            <div class="form-section">
                <h3 class="section-title">💼 Lan Informazioa</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="department_id">
                            Saila <span class="required">*</span>
                        </label>
                        <select id="department_id" name="department_id" class="form-select" required>
                            <option value="">Aukeratu...</option>
                            <?php foreach ($departments as $dept): ?>
                                <option value="<?= $dept['id'] ?>" <?= ($employee['department_id'] ?? '') == $dept['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($dept['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="position">
                            Lanpostua <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="position" 
                            name="position" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['position'] ?? '') ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="hire_date">
                            Hasiera Data <span class="required">*</span>
                        </label>
                        <input 
                            type="date" 
                            id="hire_date" 
                            name="hire_date" 
                            class="form-input"
                            value="<?= $employee['hire_date'] ?? '' ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contract_type">
                            Kontratazio Mota
                        </label>
                        <select id="contract_type" name="contract_type" class="form-select">
                            <option value="">Aukeratu...</option>
                            <option value="permanent" <?= ($employee['contract_type'] ?? '') === 'permanent' ? 'selected' : '' ?>>Finkoa</option>
                            <option value="temporary" <?= ($employee['contract_type'] ?? '') === 'temporary' ? 'selected' : '' ?>>Behin-behinekoa</option>
                            <option value="internship" <?= ($employee['contract_type'] ?? '') === 'internship' ? 'selected' : '' ?>>Praktikak</option>
                            <option value="apprentice" <?= ($employee['contract_type'] ?? '') === 'apprentice' ? 'selected' : '' ?>>Ikaslan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="salary">
                            Soldata (€)
                        </label>
                        <input 
                            type="number" 
                            id="salary" 
                            name="salary" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['salary'] ?? '') ?>"
                            min="0"
                            step="0.01"
                            placeholder="25000.00"
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="iban">
                            IBAN
                        </label>
                        <input 
                            type="text" 
                            id="iban" 
                            name="iban" 
                            class="form-input"
                            value="<?= htmlspecialchars($employee['iban'] ?? '') ?>"
                            pattern="[A-Z]{2}[0-9]{22}"
                            placeholder="ES0000000000000000000000"
                        >
                        <span class="form-help">Formatua: ES + 22 zenbaki</span>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="role">
                            Rola <span class="required">*</span>
                        </label>
                        <select id="role" name="role" class="form-select" required>
                            <option value="EMPLEADO" <?= ($employee['role'] ?? 'EMPLEADO') === 'EMPLEADO' ? 'selected' : '' ?>>Langilea</option>
                            <option value="RRHH" <?= ($employee['role'] ?? '') === 'RRHH' ? 'selected' : '' ?>>GIZA Baliabideak</option>
                            <option value="RRHH_MGR" <?= ($employee['role'] ?? '') === 'RRHH_MGR' ? 'selected' : '' ?>>GIZA Baliabide Kudeatzailea</option>
                            <option value="ADMIN" <?= ($employee['role'] ?? '') === 'ADMIN' ? 'selected' : '' ?>>Administratzailea</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label checkbox-group">
                            <input 
                                type="checkbox" 
                                id="active" 
                                name="active" 
                                value="1"
                                <?= ($employee['active'] ?? true) ? 'checked' : '' ?>
                            >
                            <span>Aktiboa</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <a href="/employees" class="btn btn-secondary">❌ Ezeztatu</a>
                <button type="submit" class="btn btn-primary">
                    <?= $isEdit ? '💾 Gorde Aldaketak' : '➕ Sortu Langilean' ?>
                </button>
            </div>
        </form>
    </div>

    <script>
        // Form validation
        document.getElementById('employee-form').addEventListener('submit', function(e) {
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                field.classList.remove('input-error');
                if (!field.value.trim()) {
                    field.classList.add('input-error');
                    isValid = false;
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Mesedez, bete derrigorrezko eremu guztiak.');
            }
        });

        // NIF validation
        document.getElementById('nif').addEventListener('blur', function() {
            const nif = this.value.toUpperCase();
            const nifRegex = /^[0-9]{8}[A-Z]$/;
            
            if (nif && !nifRegex.test(nif)) {
                this.classList.add('input-error');
                alert('NAN formatua okerra. Erabili: 12345678A');
            } else {
                this.classList.remove('input-error');
            }
        });

        // IBAN validation
        document.getElementById('iban').addEventListener('blur', function() {
            const iban = this.value.toUpperCase();
            const ibanRegex = /^[A-Z]{2}[0-9]{22}$/;
            
            if (iban && !ibanRegex.test(iban)) {
                this.classList.add('input-error');
                alert('IBAN formatua okerra. Erabili: ES0000000000000000000000');
            } else {
                this.classList.remove('input-error');
            }
        });

        // Auto-format IBAN
        document.getElementById('iban').addEventListener('input', function() {
            this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
        });

        // Auto-format NIF
        document.getElementById('nif').addEventListener('input', function() {
            this.value = this.value.toUpperCase().replace(/[^0-9A-Z]/g, '');
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nire Profila - Zabala Gailetak HR</title>
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
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .profile-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            text-align: center;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 4px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .profile-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .tabs {
            display: flex;
            gap: 0.5rem;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 2rem;
            overflow-x: auto;
        }

        .tab {
            padding: 1rem 1.5rem;
            background: none;
            border: none;
            color: #7f8c8d;
            font-weight: 500;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .tab.active {
            color: #3498db;
            border-bottom-color: #3498db;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .section {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .info-label {
            color: #7f8c8d;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            color: #2c3e50;
            font-weight: 500;
            font-size: 1.05rem;
        }

        .editable-section {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            border: 2px dashed #dee2e6;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-size: 0.95rem;
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

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #2c3e50;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .stat-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left: 4px solid #155724;
        }

        .alert-info {
            background: #d1ecf1;
            color: #0c5460;
            border-left: 4px solid #0c5460;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .stat-cards {
                grid-template-columns: 1fr;
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
        <?php if (isset($_GET['updated'])): ?>
            <div class="alert alert-success">
                ✅ Zure profila eguneratu da arrakastaz!
            </div>
        <?php endif; ?>

        <div class="profile-banner">
            <div class="profile-avatar">
                <?= strtoupper(substr($employee['first_name'], 0, 1) . substr($employee['last_name'], 0, 1)) ?>
            </div>
            <div class="profile-name">
                <?= htmlspecialchars($employee['first_name'] . ' ' . $employee['last_name']) ?>
            </div>
            <div class="profile-subtitle">
                <?= htmlspecialchars($employee['position'] ?? 'Langilean') ?> · <?= htmlspecialchars($employee['department_name'] ?? '') ?>
            </div>
        </div>

        <div class="stat-cards">
            <div class="stat-card">
                <div class="stat-icon">🏢</div>
                <div class="stat-value"><?= $stats['years_in_company'] ?? 0 ?></div>
                <div class="stat-label">Enpresa Urteak</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🌴</div>
                <div class="stat-value"><?= $stats['vacation_balance'] ?? 22 ?></div>
                <div class="stat-label">Opor Egunak Gelditzen</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📄</div>
                <div class="stat-value"><?= $stats['documents_count'] ?? 0 ?></div>
                <div class="stat-label">Dokumentuak</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">💰</div>
                <div class="stat-value"><?= $stats['payrolls_count'] ?? 0 ?></div>
                <div class="stat-label">Nomirak</div>
            </div>
        </div>

        <div class="tabs">
            <button class="tab active" onclick="showTab('view')">👁️ Profila Ikusi</button>
            <button class="tab" onclick="showTab('edit')">✏️ Datuak Editatu</button>
            <button class="tab" onclick="showTab('password')">🔒 Pasahitza Aldatu</button>
            <button class="tab" onclick="showTab('preferences')">⚙️ Hobespenak</button>
        </div>

        <!-- View Tab -->
        <div id="view-tab" class="tab-content active">
            <div class="section">
                <h3 class="section-title">📋 Informazio Orokorra</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Izena</span>
                        <span class="info-value"><?= htmlspecialchars($employee['first_name']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Abizena</span>
                        <span class="info-value"><?= htmlspecialchars($employee['last_name']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email</span>
                        <span class="info-value"><?= htmlspecialchars($employee['email']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Telefonoa</span>
                        <span class="info-value"><?= htmlspecialchars($employee['phone'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">NAN</span>
                        <span class="info-value"><?= htmlspecialchars($employee['nif'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Jaiotza Data</span>
                        <span class="info-value"><?= $employee['birth_date'] ? date('Y-m-d', strtotime($employee['birth_date'])) : '-' ?></span>
                    </div>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">📍 Helbidea</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Helbidea</span>
                        <span class="info-value"><?= htmlspecialchars($employee['address'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Hiria</span>
                        <span class="info-value"><?= htmlspecialchars($employee['city'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Posta Kodea</span>
                        <span class="info-value"><?= htmlspecialchars($employee['postal_code'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Probintzia</span>
                        <span class="info-value"><?= htmlspecialchars($employee['province'] ?? '-') ?></span>
                    </div>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">💼 Lan Informazioa</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Saila</span>
                        <span class="info-value"><?= htmlspecialchars($employee['department_name'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Lanpostua</span>
                        <span class="info-value"><?= htmlspecialchars($employee['position'] ?? '-') ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Hasiera Data</span>
                        <span class="info-value"><?= $employee['hire_date'] ? date('Y-m-d', strtotime($employee['hire_date'])) : '-' ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Kontratazio Mota</span>
                        <span class="info-value"><?= htmlspecialchars($employee['contract_type'] ?? '-') ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Tab -->
        <div id="edit-tab" class="tab-content">
            <div class="section">
                <h3 class="section-title">✏️ Editatu Nire Datuak</h3>
                <div class="alert alert-info">
                    ℹ️ Harremanetarako datuak editatu ditzakezu. Beste eremu batzuk aldatzeko, HR taldearekin harremanetan jarri.
                </div>

                <form id="update-profile-form" method="POST" action="/profile/update">
                    <div class="editable-section">
                        <div class="form-group">
                            <label class="form-label" for="phone">Telefonoa</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                class="form-input"
                                value="<?= htmlspecialchars($employee['phone'] ?? '') ?>"
                                placeholder="+34 600 000 000"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="address">Helbidea</label>
                            <input 
                                type="text" 
                                id="address" 
                                name="address" 
                                class="form-input"
                                value="<?= htmlspecialchars($employee['address'] ?? '') ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="city">Hiria</label>
                            <input 
                                type="text" 
                                id="city" 
                                name="city" 
                                class="form-input"
                                value="<?= htmlspecialchars($employee['city'] ?? '') ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="postal_code">Posta Kodea</label>
                            <input 
                                type="text" 
                                id="postal_code" 
                                name="postal_code" 
                                class="form-input"
                                value="<?= htmlspecialchars($employee['postal_code'] ?? '') ?>"
                                pattern="[0-9]{5}"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="province">Probintzia</label>
                            <input 
                                type="text" 
                                id="province" 
                                name="province" 
                                class="form-input"
                                value="<?= htmlspecialchars($employee['province'] ?? '') ?>"
                            >
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary">💾 Gorde Aldaketak</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Password Tab -->
        <div id="password-tab" class="tab-content">
            <div class="section">
                <h3 class="section-title">🔒 Aldatu Pasahitza</h3>
                
                <form id="change-password-form" method="POST" action="/profile/password">
                    <div class="editable-section">
                        <div class="form-group">
                            <label class="form-label" for="current_password">Oraingo Pasahitza</label>
                            <input 
                                type="password" 
                                id="current_password" 
                                name="current_password" 
                                class="form-input"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="new_password">Pasahitz Berria</label>
                            <input 
                                type="password" 
                                id="new_password" 
                                name="new_password" 
                                class="form-input"
                                minlength="8"
                                required
                            >
                            <small style="color: #7f8c8d;">Gutxienez 8 karaktere behar dituzu</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="confirm_password">Berretsi Pasahitza</label>
                            <input 
                                type="password" 
                                id="confirm_password" 
                                name="confirm_password" 
                                class="form-input"
                                minlength="8"
                                required
                            >
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="btn btn-success">🔐 Aldatu Pasahitza</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Preferences Tab -->
        <div id="preferences-tab" class="tab-content">
            <div class="section">
                <h3 class="section-title">⚙️ Hobespenak</h3>
                
                <form id="preferences-form" method="POST" action="/profile/preferences">
                    <div class="editable-section">
                        <div class="form-group">
                            <label class="form-label" for="language">Hizkuntza</label>
                            <select id="language" name="language" class="form-input">
                                <option value="eu" <?= ($preferences['language'] ?? 'eu') === 'eu' ? 'selected' : '' ?>>Euskara</option>
                                <option value="es" <?= ($preferences['language'] ?? '') === 'es' ? 'selected' : '' ?>>Español</option>
                                <option value="en" <?= ($preferences['language'] ?? '') === 'en' ? 'selected' : '' ?>>English</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <input 
                                    type="checkbox" 
                                    name="email_notifications" 
                                    value="1"
                                    <?= ($preferences['email_notifications'] ?? true) ? 'checked' : '' ?>
                                >
                                Email jakinarazpenak jaso
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <input 
                                    type="checkbox" 
                                    name="vacation_reminders" 
                                    value="1"
                                    <?= ($preferences['vacation_reminders'] ?? true) ? 'checked' : '' ?>
                                >
                                Opor ohartarazpenak jaso
                            </label>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary">💾 Gorde Hobespenak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab').forEach(btn => {
                btn.classList.remove('active');
            });

            document.getElementById(tabName + '-tab').classList.add('active');
            event.target.classList.add('active');
        }

        // Password confirmation validation
        document.getElementById('change-password-form').addEventListener('submit', function(e) {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (newPassword !== confirmPassword) {
                e.preventDefault();
                alert('Pasahitzak ez dira berdinak!');
            }
        });
    </script>
</body>
</html>

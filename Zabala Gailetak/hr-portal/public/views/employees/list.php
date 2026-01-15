<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langileak - Zabala Gailetak HR</title>
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

        .nav a.active {
            background: #3498db;
            color: white;
        }

        .container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .actions-bar {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 0.75rem 2.5rem 0.75rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 0.95rem;
            transition: border 0.3s;
        }

        .search-box input:focus {
            outline: none;
            border-color: #3498db;
        }

        .search-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .filter-group {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .filter-group select {
            padding: 0.75rem 2rem 0.75rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 0.95rem;
            background: white;
            cursor: pointer;
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

        .btn-secondary:hover {
            background: #7f8c8d;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .stat-card h3 {
            font-size: 0.85rem;
            color: #7f8c8d;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
        }

        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f8f9fa;
        }

        th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            color: #2c3e50;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 1rem;
            border-top: 1px solid #e0e0e0;
        }

        tbody tr {
            transition: background 0.2s;
        }

        tbody tr:hover {
            background: #f8f9fa;
        }

        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.85rem;
        }

        .btn-view {
            background: #3498db;
            color: white;
        }

        .btn-edit {
            background: #f39c12;
            color: white;
        }

        .btn-delete {
            background: #e74c3c;
            color: white;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            padding: 1.5rem;
            align-items: center;
        }

        .pagination button {
            padding: 0.5rem 1rem;
            border: 2px solid #e0e0e0;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .pagination button:hover:not(:disabled) {
            border-color: #3498db;
            color: #3498db;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .pagination .active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .pagination-info {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.3;
        }

        .empty-state h3 {
            color: #7f8c8d;
            margin-bottom: 0.5rem;
        }

        .empty-state p {
            color: #95a5a6;
        }

        .alert {
            padding: 1rem 1.5rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📊 Zabala Gailetak - Giza Baliabideak</h1>
    </div>

    <nav class="nav">
        <a href="/dashboard" class="active">Hasiera</a>
        <a href="/employees">Langileak</a>
        <a href="/vacations">Oporrak</a>
        <a href="/payrolls">Nominen</a>
        <a href="/documents">Dokumentuak</a>
        <a href="/profile">Profila</a>
        <a href="/logout" style="margin-left: auto;">Irten</a>
    </nav>

    <div class="container">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                ✅ <?= htmlspecialchars($_SESSION['success']) ?>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                ❌ <?= htmlspecialchars($_SESSION['error']) ?>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <div class="stats">
            <div class="stat-card">
                <h3>Langile Aktiboak</h3>
                <div class="value"><?= $stats['active'] ?? 0 ?></div>
            </div>
            <div class="stat-card">
                <h3>Sailak</h3>
                <div class="value"><?= $stats['departments'] ?? 0 ?></div>
            </div>
            <div class="stat-card">
                <h3>Langile Berriak (Hilabete)</h3>
                <div class="value"><?= $stats['new_this_month'] ?? 0 ?></div>
            </div>
            <div class="stat-card">
                <h3>Batez Besteko Adina</h3>
                <div class="value"><?= $stats['avg_age'] ?? 0 ?></div>
            </div>
        </div>

        <div class="actions-bar">
            <div class="search-box">
                <input 
                    type="text" 
                    id="searchInput" 
                    placeholder="Bilatu langileak (izena, NAN, email...)"
                    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                >
                <span class="search-icon">🔍</span>
            </div>

            <div class="filter-group">
                <select id="departmentFilter">
                    <option value="">Sail guztiak</option>
                    <?php foreach ($departments ?? [] as $dept): ?>
                        <option value="<?= htmlspecialchars($dept['id']) ?>" 
                            <?= (isset($_GET['department']) && $_GET['department'] == $dept['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($dept['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select id="statusFilter">
                    <option value="">Egoera guztiak</option>
                    <option value="1" <?= (isset($_GET['active']) && $_GET['active'] == '1') ? 'selected' : '' ?>>Aktiboak</option>
                    <option value="0" <?= (isset($_GET['active']) && $_GET['active'] == '0') ? 'selected' : '' ?>>Ez-aktiboak</option>
                </select>

                <button type="button" class="btn btn-secondary btn-sm" onclick="clearFilters()">
                    🔄 Garbitu
                </button>
            </div>

            <?php if (in_array($user['role'] ?? '', ['ADMIN', 'RRHH_MGR'])): ?>
                <a href="/employees/new" class="btn btn-primary">
                    ➕ Langile Berria
                </a>
            <?php endif; ?>

            <button type="button" class="btn btn-secondary" onclick="exportData()">
                📥 Esportatu CSV
            </button>
        </div>

        <div class="table-container">
            <?php if (empty($employees)): ?>
                <div class="empty-state">
                    <div class="empty-state-icon">👥</div>
                    <h3>Ez da langilerik aurkitu</h3>
                    <p>Bilaketa-irizpideak aldatu edo langile berri bat gehitu</p>
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Izena</th>
                            <th>NAN</th>
                            <th>Email</th>
                            <th>Saila</th>
                            <th>Rola</th>
                            <th>Egoera</th>
                            <th>Ekintzak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employees as $employee): ?>
                            <tr>
                                <td>
                                    <strong><?= htmlspecialchars($employee['first_name'] . ' ' . $employee['last_name']) ?></strong>
                                </td>
                                <td><?= htmlspecialchars($employee['nif'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($employee['email']) ?></td>
                                <td><?= htmlspecialchars($employee['department_name'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($employee['role'] ?? 'EMPLEADO') ?></td>
                                <td>
                                    <span class="status-badge <?= $employee['active'] ? 'status-active' : 'status-inactive' ?>">
                                        <?= $employee['active'] ? 'Aktiboa' : 'Ez-aktiboa' ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <a href="/employees/<?= $employee['id'] ?>" class="btn btn-sm btn-view">
                                            👁️ Ikusi
                                        </a>
                                        <?php if (in_array($user['role'] ?? '', ['ADMIN', 'RRHH_MGR'])): ?>
                                            <a href="/employees/<?= $employee['id'] ?>/edit" class="btn btn-sm btn-edit">
                                                ✏️ Editatu
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php if ($pagination['total_pages'] > 1): ?>
                    <div class="pagination">
                        <button 
                            onclick="goToPage(<?= max(1, $pagination['current_page'] - 1) ?>)"
                            <?= $pagination['current_page'] <= 1 ? 'disabled' : '' ?>>
                            ← Aurrekoa
                        </button>

                        <?php for ($i = 1; $i <= $pagination['total_pages']; $i++): ?>
                            <?php if ($i == 1 || $i == $pagination['total_pages'] || abs($i - $pagination['current_page']) <= 2): ?>
                                <button 
                                    onclick="goToPage(<?= $i ?>)"
                                    class="<?= $i == $pagination['current_page'] ? 'active' : '' ?>">
                                    <?= $i ?>
                                </button>
                            <?php elseif (abs($i - $pagination['current_page']) == 3): ?>
                                <span class="pagination-info">...</span>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <button 
                            onclick="goToPage(<?= min($pagination['total_pages'], $pagination['current_page'] + 1) ?>)"
                            <?= $pagination['current_page'] >= $pagination['total_pages'] ? 'disabled' : '' ?>>
                            Hurrengoa →
                        </button>

                        <span class="pagination-info">
                            <?= $pagination['current_page'] ?> / <?= $pagination['total_pages'] ?> orriak
                        </span>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Search with debounce
        let searchTimeout;
        document.getElementById('searchInput').addEventListener('input', function(e) {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                applyFilters();
            }, 500);
        });

        // Department filter
        document.getElementById('departmentFilter').addEventListener('change', applyFilters);

        // Status filter
        document.getElementById('statusFilter').addEventListener('change', applyFilters);

        function applyFilters() {
            const search = document.getElementById('searchInput').value;
            const department = document.getElementById('departmentFilter').value;
            const status = document.getElementById('statusFilter').value;

            const params = new URLSearchParams();
            if (search) params.set('search', search);
            if (department) params.set('department', department);
            if (status) params.set('active', status);

            window.location.href = '/employees?' + params.toString();
        }

        function clearFilters() {
            window.location.href = '/employees';
        }

        function goToPage(page) {
            const params = new URLSearchParams(window.location.search);
            params.set('page', page);
            window.location.href = '/employees?' + params.toString();
        }

        function exportData() {
            const params = new URLSearchParams(window.location.search);
            params.set('export', 'csv');
            window.location.href = '/employees/export?' + params.toString();
        }
    </script>
</body>
</html>

<?php require dirname(__DIR__) . '/layouts/header.php'; ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard</h2>
        <p class="text-muted">Bienvenido al panel de gestión de Zabala Gailetak.</p>
    </div>
</div>

<div class="row">
    <!-- Stats Cards -->
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-primary h-100">
            <div class="card-body">
                <h5 class="card-title">Empleados</h5>
                <p class="card-text display-4"><?= htmlspecialchars($stats['employees'] ?? 0) ?></p>
                <a href="/employees" class="text-white">Ver listado &rarr;</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-success h-100">
            <div class="card-body">
                <h5 class="card-title">Presentes Hoy</h5>
                <p class="card-text display-4">118</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-warning h-100">
            <div class="card-body">
                <h5 class="card-title">Vacaciones Pendientes</h5>
                <p class="card-text display-4"><?= htmlspecialchars($stats['pending_vacations'] ?? 0) ?></p>
                <a href="/vacations" class="text-white">Gestionar &rarr;</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-white font-weight-bold">
                Últimos Fichajes
            </div>
            <ul class="list-group list-group-flush">
                <?php if (!empty($upcomingVacations)): ?>
                    <?php foreach ($upcomingVacations as $vacation): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= htmlspecialchars($vacation['first_name'] . ' ' . $vacation['last_name']) ?>
                            <span class="badge bg-info rounded-pill">
                                <?= date('d/m', strtotime($vacation['start_date'])) ?> - <?= date('d/m', strtotime($vacation['end_date'])) ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item text-muted">
                        No hay vacaciones próximas
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>

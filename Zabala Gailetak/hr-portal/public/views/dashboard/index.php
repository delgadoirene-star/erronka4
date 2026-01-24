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
                <p class="card-text display-4">124</p>
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
                <p class="card-text display-4">5</p>
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
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Jon Ander (Producción)
                    <span class="badge bg-success rounded-pill">07:55</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Amaia Etxebarria (HR)
                    <span class="badge bg-success rounded-pill">08:02</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Mikel Otegi (IT)
                    <span class="badge bg-success rounded-pill">08:15</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>

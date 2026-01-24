<?php require dirname(__DIR__) . '/layouts/header.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mis Vacaciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary">
            Solicitar Vacaciones
        </button>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Días Totales</h5>
                <p class="card-text display-4">22</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Disfrutados</h5>
                <p class="card-text display-4">5</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Pendientes</h5>
                <p class="card-text display-4">17</p>
            </div>
        </div>
    </div>
</div>

<h3>Historial de Solicitudes</h3>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Días</th>
                <th>Tipo</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2026-01-02</td>
                <td>2026-01-06</td>
                <td>5</td>
                <td>Vacaciones</td>
                <td><span class="badge bg-success">Aprobado</span></td>
            </tr>
            <tr>
                <td>2026-04-15</td>
                <td>2026-04-20</td>
                <td>5</td>
                <td>Vacaciones</td>
                <td><span class="badge bg-warning text-dark">Pendiente</span></td>
            </tr>
        </tbody>
    </table>
</div>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>

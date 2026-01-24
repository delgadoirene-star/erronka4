<?php require dirname(__DIR__) . '/layouts/header.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mis Vacaciones (<?= $year ?>)</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/vacations/request" class="btn btn-sm btn-primary">
            Solicitar Vacaciones
        </a>
    </div>
</div>

<?php if (isset($error)): ?>
    <div class="alert alert-warning"><?= htmlspecialchars($error) ?></div>
<?php else: ?>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Días Totales</h5>
                <p class="card-text display-4"><?= number_format($balance->totalDays ?? 22, 1) ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Disfrutados</h5>
                <p class="card-text display-4"><?= number_format($balance->usedDays ?? 0, 1) ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Pendientes</h5>
                <p class="card-text display-4"><?= number_format($balance->availableDays ?? 22, 1) ?></p>
            </div>
        </div>
    </div>
</div>

<h3>Historial de Solicitudes</h3>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Fecha Solicitud</th>
                <th>Desde</th>
                <th>Hasta</th>
                <th>Días</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $req): ?>
            <tr>
                <td><?= htmlspecialchars(date('d/m/Y', strtotime($req->requestDate))) ?></td>
                <td><?= htmlspecialchars(date('d/m/Y', strtotime($req->startDate))) ?></td>
                <td><?= htmlspecialchars(date('d/m/Y', strtotime($req->endDate))) ?></td>
                <td><?= number_format($req->totalDays, 1) ?></td>
                <td>
                    <?php 
                        $statusClass = match($req->status) {
                            'approved' => 'bg-success',
                            'pending' => 'bg-warning text-dark',
                            'rejected' => 'bg-danger',
                            'cancelled' => 'bg-secondary',
                            default => 'bg-light text-dark'
                        };
                        $statusLabel = match($req->status) {
                            'approved' => 'Aprobado',
                            'pending' => 'Pendiente',
                            'rejected' => 'Rechazado',
                            'cancelled' => 'Cancelado',
                            default => $req->status
                        };
                    ?>
                    <span class="badge <?= $statusClass ?>"><?= htmlspecialchars($statusLabel) ?></span>
                </td>
            </tr>
            <?php endforeach; ?>
            
            <?php if (empty($requests)): ?>
            <tr>
                <td colspan="5" class="text-center">No hay solicitudes registradas.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php endif; ?>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>
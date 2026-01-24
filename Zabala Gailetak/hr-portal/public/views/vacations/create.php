<?php require dirname(__DIR__) . '/layouts/header.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Solicitar Vacaciones</h1>
</div>

<form action="/vacations/request" method="POST" class="row g-3">
    <div class="col-md-6">
        <label for="start_date" class="form-label">Fecha Inicio</label>
        <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="col-md-6">
        <label for="end_date" class="form-label">Fecha Fin</label>
        <input type="date" class="form-control" id="end_date" name="end_date" required>
    </div>
    <div class="col-12">
        <label for="notes" class="form-label">Notas / Motivo (Opcional)</label>
        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
    </div>
    
    <div class="col-12 mt-4">
        <button class="btn btn-primary" type="submit">Enviar Solicitud</button>
        <a href="/vacations" class="btn btn-outline-secondary">Cancelar</a>
    </div>
</form>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>

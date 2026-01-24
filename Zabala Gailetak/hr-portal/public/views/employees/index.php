<?php require dirname(__DIR__) . '/layouts/header.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Empleados</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-secondary">
            Exportar
        </button>
        <button type="button" class="btn btn-sm btn-primary ms-2">
            Nuevo Empleado
        </button>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Puesto</th>
                <th>Departamento</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td>Jon</td>
                <td>Ander</td>
                <td>Operario</td>
                <td>Producción</td>
                <td><span class="badge bg-success">Activo</span></td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>Amaia</td>
                <td>Etxebarria</td>
                <td>Manager</td>
                <td>HR</td>
                <td><span class="badge bg-success">Activo</span></td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Mikel</td>
                <td>Otegi</td>
                <td>SysAdmin</td>
                <td>IT</td>
                <td><span class="badge bg-warning">Vacaciones</span></td>
            </tr>
        </tbody>
    </table>
</div>

<?php require dirname(__DIR__) . '/layouts/footer.php'; ?>

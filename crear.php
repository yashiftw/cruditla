<!doctype html>
<html lang="en">

<?php include('includes_header.php'); ?>

<style>
div.ss {
    margin-right: 90%;
}
</style>

<body>

    <form action="almacenar.php" class="text-center border border-light p-5" method="POST">
        <label>Ingresar datos</label>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombres" autofocus required>
        </div>
        <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" autofocus required>
        </div>
        <div class="form-group">
            <input type="text" name="carrera" class="form-control" placeholder="Carrera" autofocus required>
        </div>
        <input type="hidden" name="status" value="activo" />
        <input type="submit" name="save_estudiante" class="btn btn-success btn-block" value="Guardar">
    </form>
    <div class="ex1"> <a href="index.php" class="btn btn-primary btn-lg active">Inicio</a></div>
</body>

</html>
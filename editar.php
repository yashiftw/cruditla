<?php
session_start();

$id = $_GET['id'];
$nombre = $_SESSION['All-data'][$id]['nombre'];
$apellido = $_SESSION['All-data'][$id]['apellido'];
$carrera = $_SESSION['All-data'][$id]['carrera'];
$status = $_SESSION['All-data'][$id]['status'];
?>
<?php include('includes_header.php'); ?>
<style>
div.ss {
    margin-right: 90%;

}

div.ex1 {
    margin-left: 4%;
}
</style>


<body>

    <form action="actualizar_data.php" class="text-center border border-light p-5" method="POST">
        <label>EDITAR</label>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombres" required
                value="<?php echo $nombre; ?>" autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido"
                value="<?php echo $apellido; ?>" autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="carrera" class="form-control" placeholder="Carrera" required
                value="<?php echo $carrera; ?>" autofocus>
        </div>
        <div class="form-group ss">
            <label for="status">Status</label>
            <input type="checkbox" name="status[]" value="<?php echo $status;?>"
                <?php echo ($status=='activo' ? 'checked' : '');?>>



        </div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
    <div class="ex1"> <a href="index.php" class="btn btn-success">Inicio</a></div>
</body>

</html>
<?php
// session_destroy();
session_start();
$searchvalue = $_SESSION['All-data'];
$allData = $_SESSION['All-data'];
if(isset($_POST['buscar'])){
    if(!empty($_POST['xcarreras'])){
     $allData =  array_filter($allData,function($c){
           return $c['carrera']==$_POST['xcarreras'];
        });
    }
}
?>
<!doctype html>
<html lang="en">

<?php include('includes_header.php'); ?>

<style>
body {
    font-size: 25px;

* {
    box-sizing: border-box;
}

div.filter {
    margin-top: 5%;
}


div.ex1 {
    margin-left: 8%;
}
</style>

<body>
    <form method="post" style="margin:auto;max-width:300px">
        <div class="input-group mb-3 filter">
            <select class="browser-default custom-select" name="xcarreras">

                <option value="">
                    <?php 
   foreach($searchvalue as $key=>$value){
                echo '
            <option value="'.$value['carrera'].'">'.$value['carrera'].'</option>';
            }

            ?>

                </option>
            </select>
            <button name="buscar" type="submit" class="btn btn-lg btn-primary "> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>
                Buscar</button>
        </div>
    </form>
    <table class="table table-striped">
        <thead class= "thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Status</th>
                <th>Carrera</th>
                <th colspan="5">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allData as $key=>$value){ ?>
            <td>
                <?php echo $key+1; ?>
            </td>
            <td>
                <?php echo $allData[$key]['nombre']; ?>
            </td>
            <td>
                <?php echo $allData[$key]['apellido']; ?>
            </td>
            <td>

                <?php echo $allData[$key]['status']=='activo'?  ' <i class="fa fa-check-square fa-2x"> Activo</i>':'    <i class="fa fa-times fa-2x"> Inactivo</i>' ?>
            
            </td>
            <td>
                <?php echo $allData[$key]['carrera']; ?>
            </td>
            <td>
                <a href="editar.php?id=<?php echo $key?>" class="btn btn-secondary">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="borrar.php?id=<?php echo $key?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>
            </tr>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="ex1"> <a href="crear.php" class="btn btn-success">Registrar</a></div>
    <br />
    <br />
    <br />

</body>

</html>
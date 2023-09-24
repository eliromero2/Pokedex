<?php
session_start();
include_once 'lib/mysql.php';
include_once 'header.php';

$db = new MySQLDatabase();

$busqueda = $_GET['busqueda'];

$sql = "SELECT * FROM pokemon WHERE nombre LIKE '$busqueda%'";

$resultados = $db->fetchAll($sql);

?>
<div class="container">
    <h2 class="text-center my-5">Resultado de la busqueda</h2>
<div class="row">
    <div class="col">
<table class="table">
    <thead>
    <tr>
        <th scope="col">Numero</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripcion</th>
        <?php 
      if(isset($_SESSION['usuario'])){
        echo '<th scope="col">Acciones</th>';
      }
      ?>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($resultados)) {

        foreach ($resultados as $pokemon) {
            include 'components/tableRow.php';
        }
    }
    ?>
    </tbody>
</table>
</div>
</div>
    <a href="index.php" class="d-flex justify-content-center my-5">Volver al inicio</a>
</div>

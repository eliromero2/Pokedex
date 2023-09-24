<?php
session_start();
include_once 'lib/mysql.php';
include_once 'header.php';

$db = new MySQLDatabase();
$pokemones = $db->fetchAll('select * from pokemon');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Inicio</title>
</head>
<body>


<div class="container">

    <form class="d-flex my-5" role="search" method="GET" action="buscarPokemon.php">
        <input class="form-control me-2" type="search" id="busqueda" name="busqueda">
        <input class="btn btn-outline-success"  type="submit" value="Buscar">
    </form>

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
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($pokemones as $pokemon){
                include 'components/tableRowSinBoton.php';
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
    <?php
    if (isset($_SESSION["usuario"])) {
        echo '<div class="d-flex justify-content-center my-5 btn btn-outline-danger">';
        echo '<a href="cierroSesion.php" class="d-block">Cerrar sesion</a>';
        echo '</div>';
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


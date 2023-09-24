<?php
session_start();

include_once 'lib/mysql.php';
include_once 'header.php';
$pokemonDetalle= $_GET["nombre"];
$db = new MySQLDatabase();

$pokemones = $db->fetchAll("SELECT * FROM pokemon WHERE nombre = '$pokemonDetalle'");

?>

<div class="container bg-dark p-3">

    <div class="row">
        <div class="col">

            <div>

                <tbody>
                <?php
                    foreach($pokemones as $pokemon){
                        include 'components/pokedex.php';
                    }


                ?>

                </tbody>

            </div>
              </div>
        <div class="d-flex justify-content-center">
            <a href= home.php class="btn btn-primary mx-2 shadow p-3 mb-5 rounded text-wrap ">volver al listado</a>
        </div>

    </div>

</div>
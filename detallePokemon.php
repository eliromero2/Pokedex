<?php
session_start();

include_once 'lib/mysql.php';
include_once 'header.php';
$pokemonDetalle= $_GET["nombre"];
$db = new MySQLDatabase();

$pokemones = $db->fetchAll("SELECT * FROM pokemon WHERE nombre = '$pokemonDetalle'");

if( isset($_POST["usuario"] )){
    $_SESSION["usuario"] = $_POST["usuario"];
}

echo "hola " . $_SESSION["usuario"]  .  "!";

?>

<div class="container">

    <form class="d-flex my-5" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>



    <div class="row">
        <div class="col">

            <table class="table">

                <tbody>
                <?php
                    foreach($pokemones as $pokemon){
                        include 'components/pokedex.php';
                    }


                ?>

                </tbody>

            </table>
              </div>
        <div class="d-flex justify-content-center">
            <a href= home.php class="btn btn-primary mx-2 shadow p-3 mb-5 rounded text-wrap ">volver al listado</a>
        </div>

    </div>

</div>
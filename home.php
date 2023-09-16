<?php
include_once 'lib/mysql.php';
include_once 'header.php';
$db = new MySQLDatabase('localhost', 'root', 'example', 'pokedex');
$pokemones = $db->fetchAll('select * from pokemon');
var_dump($pokemones);
session_start();

if( isset($_POST["usuario"] )){
    $_SESSION["usuario"] = $_POST["usuario"];
}

echo "hola " . $_SESSION["usuario"]  .  "!";
?>
 <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

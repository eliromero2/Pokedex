<?php
session_start();

include_once 'lib/mysql.php';
include_once 'header.php';

$db = new MySQLDatabase('localhost', 'root', 'example', 'pokedex');
$pokemones = $db->fetchAll('select * from pokemon');

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
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
        <?php 
            foreach($pokemones as $pokemon){
                include 'components/tableRow.php';
            }
        ?>

  </tbody>
</table>
    </div>
</div>

</div>
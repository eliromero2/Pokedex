<?php
session_start();

include_once 'lib/mysql.php';
include_once 'header.php';

$db = new MySQLDatabase();
$pokemones = $db->fetchAll('select * from pokemon');


if (!isset($_SESSION["usuario"])) {
// Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("Location: index.php");
    exit;
}

?>

<div class="container">
    <h2 class="my-3"><?php echo "Bienvenido " . $_SESSION["usuario"]  .  "!"; ?></h2>
    <?php include_once 'components/search.php' ?>

    <?php if (isset($_SESSION['deletePokemon']) || isset($_SESSION['updatePokemon']) || isset($_SESSION['createPokemon'])): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php if (isset($_SESSION['deletePokemon'])): ?>
      <?php echo $_SESSION['deletePokemon']; unset($_SESSION['deletePokemon']); ?>
    <?php elseif (isset($_SESSION['updatePokemon'])): ?>
      <?php echo $_SESSION['updatePokemon']; unset($_SESSION['updatePokemon']);?>
    <?php elseif (isset($_SESSION['createPokemon'])): ?>
      <?php echo $_SESSION['createPokemon']; unset($_SESSION['createPokemon']); ?>
    <?php endif; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>


<a href="/Pokedex/create.php" class="btn btn-info shadow p-3 mb-5 bg-body-tertiary rounded">Agregar Pokemon</a>

<div class="row">
    <div class="col">
    <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
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
            foreach($pokemones as $pokemon){
                include 'components/tableRow.php';
            }
        ?>

  </tbody>
</table>
    </div>
</div>
    <a href="index.php" class="d-flex justify-content-center my-5">Volver al inicio</a>

</div>
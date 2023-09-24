<?php
$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri) {
    case '/Pokedex/index.php':
      $activeInicio = "active";
      $activeHome='';
      break;
    case '/Pokedex/home.php':
        $activeHome = "active";
        $activeInicio= '';
        break;
    default:
        $activeInicio = "";
        $activeHome = "";
        break;
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="./extras/logoPokemon.png" alt="" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo $activeInicio; ?>" href="index.php">Inicio</a>
                </li>
                <?php if (isset($_SESSION["usuario"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $activeHome; ?>" href="home.php">Listado de pokemones</a>
                    </li>
                <?php endif; ?>
            </ul>

            <?php if (!isset($_SESSION["usuario"])) : ?>
                <a href="loginForm.php" class="mr-5 btn btn-primary">Ir a Iniciar sesión</a>
            <?php else : ?>
                <a class="btn btn-danger" href="cierroSesion.php">Cerrar sesión</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

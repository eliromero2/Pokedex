<?php

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="./extras/logoPokemon.png" alt="" width="80" height="80">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
          <?php
          if (isset($_SESSION["usuario"])) {
              echo '<li class="nav-item">';
              echo '  <a class="nav-link" href="cierroSesion.php">Cerrar sesión</a>';
              echo '</li>';
          }
          ?>

      </ul>
    </div>
  </div>
</nav>
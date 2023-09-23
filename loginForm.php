<?php
include_once 'lib/mysql.php';
include_once 'header.php';

$db = new MySQLDatabase('localhost', 'root', '', 'pokedex');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
</head>
<body>
<div class="d-flex justify-content-center my-5">
    <h2>Bienvenido al inicio de sesion</h2>
</div>
<div class="container-xl d-flex   justify-content-center my-5 bg-secondary-subtle">
<form action="inicioSesion.php" method="post">
    <div class="d-flex justify-content-center my-5">
    <label for="usuario" class="form-label px-3 fs-4">Usuario: </label>
    <input type="text" name="usuario" id="usuario" required class="form-control">
    </div>
    <div class="d-flex justify-content-center my-5">
    <label for="contrasenia" class="form-label px-3 fs-4">Contraseña: </label>
    <input type="password" name="contrasenia" id="contrasenia" required class="form-control">
    </div>
    <div class="d-flex justify-content-center my-5">
    <input type="submit" value="Iniciar sesion" class="btn btn-primary btn-lg">
    </div>

</form>
</div>
<a href="index.php" class="d-flex justify-content-center my-5">Volver al inicio</a>
</body>
</html>

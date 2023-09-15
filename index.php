<?php
include_once 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Inicio</title>
</head>
<body>
<form action="inicioSesion.php" method="post">
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario" required>
    <label for="contrasenia">Contraseña: </label>
    <input type="password" name="contrasenia" id="contrasenia" required>
    <input type="submit" value="Iniciar sesion">
</form>
<a href="cierroSesion.php">Cerrar sesion</a>
</body>
</html>

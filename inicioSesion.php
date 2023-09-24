<?php
include_once 'header.php';
include_once 'lib/mysql.php';
session_start();

$username = isset($_POST["usuario"]) ? $_POST["usuario"] : null;
$password = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : null;

$db = new MySQLDatabase('localhost', 'root', '', 'pokedex');

$sql = "SELECT * FROM users WHERE username = '$username'";
$hasUser = $db->fetchOne($sql);

if ($hasUser) {

    $hashedPassword = $hasUser["password"]; // Contraseña almacenada en la base de datos

    if (md5($password) == $hashedPassword) { // Comparar el hash MD5 de la contraseña ingresada con la almacenada
        // Inicio de sesión exitoso
        $_SESSION["usuario"] = $username;
        header("Location: home.php");
    } 
}else {
    echo'<div class="d-flex flex-column align-items-center justify-content-center my-5">';
    echo '<h3>Credenciales incorrectas</h3>';
    echo '<p>Verifica tus datos.</p>';
    echo'</div>';
    echo'<div class="d-flex justify-content-center my-5">';
    echo '<a class=" my-5 btn btn-outline-dark" href="loginForm.php">Volver al formulario</a>';
    echo'</div>';
} /* else {
    // Usuario no existe, registrarlo en la base de datos
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($db->getConnection(), $sql)) {
        // Registro exitoso, inicia sesión
        $_SESSION["usuario"] = $username;
        header("Location: home.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($db->getConnection());
        header("Location: index.php");
    }
} */

function validarCampos($username, $password){
    return !empty($username) && !empty($password);
}

<?php
include_once 'header.php';
include_once 'lib/mysql.php';
session_start();

$username = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$password = isset( $_POST["contrasenia"])?$_POST["contrasenia"] : "";

$db = new MySQLDatabase('localhost', 'root', '', 'pokedex');

$sql = "SELECT * FROM users WHERE username = '$username'";
$resultado = mysqli_query($db->getConnection(), $sql);

if (mysqli_num_rows($resultado) == 1 && validarCampos($username,$password)) {

    // Usuario existe, verificar la contraseña
    $row = mysqli_fetch_assoc($resultado);
    $hashedPassword = $row["password"]; // Contraseña almacenada en la base de datos

    if (md5($password) == $hashedPassword) { // Comparar el hash MD5 de la contraseña ingresada con la almacenada
        // Inicio de sesión exitoso
        $_SESSION["usuario"] = $username;
        header("Location: home.php");
    } else {
        echo'<div class="d-flex justify-content-center my-5">';
        echo '<h3>Contraseña incorrecta. Verifica tus datos.</h3>';
        echo'</div>';
        echo'<div class="d-flex justify-content-center my-5">';
        echo '<a class=" my-5 btn btn-outline-dark" href="loginForm.php">Volver al formulario</a>';
        var_dump($password, $hashedPassword);
        echo'</div>';
    }
} else {
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
}

$db->disconnect();
/*FRAGMENTO DE IF QUE FUNCIONA SIN HASH
 * // Usuario existe, verificar la contraseña
$row = mysqli_fetch_assoc($resultado);
if ($row["password"] == $password) {
    // Inicio de sesión exitoso
    $_SESSION["usuario"] = $username;
    header("Location: home.php");
} else {
    // Contraseña incorrecta
    echo "Contraseña incorrecta. Verifica tus credenciales.";
}
}*/

function validarCampos($username, $password){
    return !empty($username) && !empty($password);
}

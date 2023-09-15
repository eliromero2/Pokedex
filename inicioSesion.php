<?php
session_start();

$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$contrasenia = isset( $_POST["contrasenia"])?$_POST["contrasenia"] : "";

if ( validarCampos($usuario, $contrasenia)){
    $_SESSION["usuario"] = $usuario;
    header("location:home.php");
    exit();
} else {
    header("location:index.php");
    exit();
}

function validarCampos($usuario, $contrasenia){
    return !empty($usuario) && !empty($contrasenia);
}

<?php

include_once 'header.php';

session_start();

if( isset($_POST["usuario"] )){
    $_SESSION["usuario"] = $_POST["usuario"];
}

echo "hola " . $_SESSION["usuario"]  .  "!";

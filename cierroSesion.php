<?php
include_once 'header.php';
session_start();

session_destroy();
echo "se cerro la sesion";
header("Location: index.php");

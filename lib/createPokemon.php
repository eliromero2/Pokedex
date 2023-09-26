<?php
include_once 'mysql.php';
session_start();

unset($_SESSION["updatePokemon"]);
unset($_SESSION["deletePokemon"]);

$db = new MySQLDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['name'];
    $nro_id = $_POST['numero_identificador'];
    $habitad = $_POST['habitad'];
    $tipo = $_POST['type1'];
    $descripcion = $_POST['descripcion'];
    $peso = $_POST['weight'];
    $altura = $_POST['height'];

    // Procesar la imagen
    $imagen = $_FILES['formFile']['name'];
    $ruta_temporal = $_FILES['formFile']['tmp_name'];
    $ruta_destino = __DIR__.'/../imagenes/' . $imagen;
    $imagen_path ='imagenes/' . $imagen;
    move_uploaded_file($ruta_temporal, $ruta_destino);

    // Crear el nuevo Pokemon
    $sql = "INSERT INTO pokemon (nombre, habitad, tipo, descripcion, peso, altura, imagen_path, numero_identificador) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param('ssssssss', $nombre, $habitad, $tipo, $descripcion, $peso, $altura, $imagen_path, $nro_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION["createPokemon"] = "Pokemon Agregado!";
        

    } else {
        $_SESSION["createPokemon"] = "Error al crear Pokemon";
    }

    header('Location: /Pokedex/home.php');
    exit();
}
?>
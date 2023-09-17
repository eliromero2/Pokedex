<?php
include_once 'mysql.php';

$db = new MySQLDatabase('localhost', 'root', 'example', 'pokedex');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['name'];
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
    $sql = "INSERT INTO pokemon (nombre, habitad, tipo, descripcion, peso, altura, imagen_path) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param('sssssss', $nombre, $habitad, $tipo, $descripcion, $peso, $altura, $imagen_path);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
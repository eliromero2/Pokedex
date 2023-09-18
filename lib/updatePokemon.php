<?php
include_once 'mysql.php';

$db = new MySQLDatabase('localhost', 'root', '', 'pokedex');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
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

    // Actualizar el registro del Pokemon
    $sql = "UPDATE pokemon SET nombre = ?, habitad = ?, tipo = ?, descripcion = ?, peso = ?, altura = ?, imagen_path = ? WHERE id = ?";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param('sssssssi', $nombre, $habitad, $tipo, $descripcion, $peso, $altura, $imagen_path, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
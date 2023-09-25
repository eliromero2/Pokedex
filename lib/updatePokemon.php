<?php
include_once 'mysql.php';

$db = new MySQLDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $habitad = $_POST['habitad'];
    $tipo = $_POST['type1'];
    $descripcion = $_POST['descripcion'];
    $peso = $_POST['weight'];
    $altura = $_POST['height'];
    $nro_identificador = $_POST['numero_identificador'];

    // Procesar la imagen
    $imagen = $_FILES['formFile']['name'];
    $ruta_temporal = $_FILES['formFile']['tmp_name'];
    $ruta_destino = __DIR__.'/../imagenes/' . $imagen;
    $imagen_path ='imagenes/' . $imagen;
    move_uploaded_file($ruta_temporal, $ruta_destino);

     // Actualizar el registro del Pokemon
     $sql = "UPDATE pokemon SET nombre = ?, habitad = ?, tipo = ?, descripcion = ?, peso = ?, altura = ?, numero_identificador = ?";

     if($imagen){
         $sql .= ", imagen_path = ?";
     }
 
     $sql .= " WHERE id = ?";
     $stmt = $db->getConnection()->prepare($sql);
 
     if($imagen){
         $stmt->bind_param('ssssssssi', $nombre, $habitad, $tipo, $descripcion, $peso, $altura, $imagen_path, $nro_identificador, $id);
     } else {
         $stmt->bind_param('sssssssi', $nombre, $habitad, $tipo, $descripcion, $peso, $altura, $nro_identificador, $id);
     }

 
     $stmt->execute();

    if ($stmt->affected_rows > 0) {
        setcookie("updatePokemon", "Pokemon Actualizado!", time() + 3600);
    } else {
        setcookie("updatePokemon", "Error al actualizar Pokemon", time() + 3600);
    }

    header('Location: /Pokedex/home.php');
    exit();
}
?>
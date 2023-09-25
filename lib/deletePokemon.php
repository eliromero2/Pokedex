<?php
include_once 'mysql.php';
session_start();

unset($_SESSION["updatePokemon"]);
unset($_SESSION["createPokemon"]);

$db = new MySQLDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['numero_identificador'];

    // Delete the Pokemon
    $sql = "DELETE FROM pokemon WHERE numero_identificador = ?";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION["deletePokemon"] = "Pokemon Eliminado!";
    } else {
        $_SESSION["deletePokemon"] = "Error al eliminar Pokemon";
    }

    $db->disconnect();
    header('Location: /Pokedex/home.php');
    exit();
}
?>
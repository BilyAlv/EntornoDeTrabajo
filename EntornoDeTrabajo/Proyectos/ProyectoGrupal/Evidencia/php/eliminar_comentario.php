<?php
// Conexión a la base de datos (MySQL)
$conn = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del comentario a eliminar
$id = $_POST['id'];

// Eliminar el comentario
$sql = "DELETE FROM comentarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->close();
$conn->close();
?>

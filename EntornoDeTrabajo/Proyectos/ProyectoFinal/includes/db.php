<?php
$host = 'localhost';  // o la URL de tu servidor de base de datos
$dbname = 'libreria'; // nombre de la base de datos
$username = 'root';   // tu nombre de usuario de base de datos
$password = '';       // tu contraseña de base de datos

try {
    // Crear una conexión con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error a excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores en caso de fallo de conexión
    echo "Conexión fallida: " . $e->getMessage();
}
?>

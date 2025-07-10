<?php
$servername = "localhost";
$username = "root"; // Cambia por tu usuario de MySQL
$password = "1529"; // Cambia por tu contraseña de MySQL
$dbname = "autos_db"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

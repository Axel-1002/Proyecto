<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
    $anio = intval($_POST['anio']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);

    $sql = "INSERT INTO autos (nombre, marca, anio, descripcion) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $nombre, $marca, $anio, $descripcion);

    if ($stmt->execute()) {
        echo "Nuevo auto agregado exitosamente";
    } else {
        echo "Error al agregar el auto: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

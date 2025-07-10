<?php
include 'config.php';

$sql = "SELECT * FROM autos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Marca: " . $row["marca"]. " - Año: " . $row["anio"]. " - Descripción: " . $row["descripcion"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

<?php
function guardarResena($producto_id, $calificacion, $comentario)
{
    $conexion = new mysqli("localhost", "root", "", "tienda");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("INSERT INTO resenas (producto_id, calificacion, comentario) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $producto_id, $calificacion, $comentario);

    if ($stmt->execute()) {
        echo "Reseña guardada exitosamente.";
    } else {
        echo "Error al guardar la reseña.";
    }

    $stmt->close();
    $conexion->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    guardarResena($_POST["producto_id"], $_POST["calificacion"], $_POST["comentario"]);
}
?>
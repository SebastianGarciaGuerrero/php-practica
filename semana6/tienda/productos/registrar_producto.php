<?php
include("../includes/conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "INSERT INTO PRODUCTO (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', $precio, $stock)";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
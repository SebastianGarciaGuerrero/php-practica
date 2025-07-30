<?php
include("../includes/conexion.php");

$id_cliente = $_POST['id_cliente'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];

// Verificar que el producto exista
$result = $conn->query("SELECT precio FROM PRODUCTO WHERE id_producto = $id_producto");

if ($result && $result->num_rows > 0) {
    $producto = $result->fetch_assoc();
    $precio = $producto['precio'];
    $total = $precio * $cantidad;
    $fecha = date('Y-m-d');

    // Insertar la compra
    $sql = "INSERT INTO COMPRA (cantidad, total, fecha, id_producto, id_cliente) 
            VALUES ($cantidad, $total, '$fecha', $id_producto, $id_cliente)";

    if ($conn->query($sql) === TRUE) {
        echo "Compra registrada correctamente";
    } else {
        echo "Error al registrar la compra: " . $conn->error;
    }
} else {
    echo "Error: Producto con ID $id_producto no encontrado.";
}
?>

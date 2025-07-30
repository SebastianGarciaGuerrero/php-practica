<?php
include("../includes/conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO CLIENTE (nombre, email, direccion) VALUES ('$nombre', '$email', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
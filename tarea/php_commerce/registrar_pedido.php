<?php
require_once("Pedido.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pedido = new Pedido(
        $_POST["descripcion"],
        $_POST["tipo"],
        $_POST["producto"],
        $_POST["unidades"],
        $_POST["observaciones"]
    );

    echo "<h3>Resumen del Pedido:</h3>";
    echo "<p>" . $pedido->mostrarResumen() . "</p>";
}
?>
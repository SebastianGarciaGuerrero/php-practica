<?php
include("../includes/conexion.php");

$sql = "SELECT
            C.nombre,
            COUNT(*) AS total_compras
        FROM COMPRA CP
        JOIN CLIENTE C ON CP.id_cliente = C.id_cliente
        GROUP BY CP.id_cliente
        HAVING total_compras > 2";

$resultado = $conn->query($sql);

echo "<h3>Clientes con más de 2 compras</h3>";
echo "<table>";
echo "<tr><th>Nombre</th><th>Total Compras</th></tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['total_compras'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
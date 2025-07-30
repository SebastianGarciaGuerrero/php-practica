<?php
include("../includes/conexion.php");

$res = $conn->query("SELECT * FROM COMPRA");

echo "<h3>Compras</h3><table><tr>";
while ($fieldinfo = $res->fetch_field()) {
    echo "<th>{$fieldinfo->name}</th>";
}
echo "</tr>";
while ($row = $res->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
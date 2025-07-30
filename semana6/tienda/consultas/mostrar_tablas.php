<?php
include("../includes/conexion.php");

function mostrarTabla($tabla)
{
    global $conn;
    $res = $conn->query("SELECT * FROM $tabla");
    echo "<h3>$tabla</h3><table><tr>";
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
}

mostrarTabla("PRODUCTO");
mostrarTabla("CLIENTE");
?>
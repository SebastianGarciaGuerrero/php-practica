<?php
// Iniciar sesión (siempre al principio del script)
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Leyendo variable de sesión</title>
</head>
<body>
    <?php
    // Verificar si la variable existe antes de mostrarla
    if (isset($_SESSION["mivariabledesesion"])) {
        echo "Valor de la sesión: " . $_SESSION["mivariabledesesion"];
    } else {
        echo "La variable 'mivariabledesesion' no está definida.";
    }
    ?>
</body>
</html>
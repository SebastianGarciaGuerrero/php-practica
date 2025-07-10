<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reseña del Producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<form action="guardar_resena.php" method="POST">
    <label for="producto_id">ID del Producto:</label>
    <input type="number" name="producto_id" required><br>

    <label for="calificacion">Calificación (1-5):</label>
    <input type="number" name="calificacion" min="1" max="5" required><br>

    <label for="comentario">Comentario:</label><br>
    <textarea name="comentario" rows="4" cols="50" required></textarea><br>

    <input type="submit" value="Enviar Reseña">
</form>

</body>
</html>

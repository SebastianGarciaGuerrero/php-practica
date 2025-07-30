<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito de compras</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Carrito de compras</h1>
  <p><a href="index.php">Volver a la tienda</a></p>

  <?php if (!empty($_SESSION['carrito'])): ?>
    <ul>
      <?php foreach ($_SESSION['carrito'] as $index => $producto): ?>
        <li>
          <?php echo $producto['nombre'] . " - $" . $producto['precio']; ?>
          <a href="eliminar.php?index=<?php echo $index; ?>">Eliminar</a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p>El carrito está vacío.</p>
  <?php endif; ?>
</body>
</html>
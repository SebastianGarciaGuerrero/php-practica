<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tienda GreenShop</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Bienvenido a GreenShop</h1>
  <p><a href="carrito.php">Ver Carrito (<?php echo isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0; ?>)</a></p>

  <div class="producto">
    <img src="img/producto1.jpg" alt="Producto 1">
    <h2>Polera Wanderers</h2>
    <p>Precio: $10.000</p>
    <form action="producto.php" method="POST">
      <input type="hidden" name="nombre" value="Polera Wanderers">
      <input type="hidden" name="precio" value="10000">
      <button type="submit">Agregar al carrito</button>
    </form>
  </div>

  <div class="producto">
    <img src="img/producto2.jpg" alt="Producto 2">
    <h2>Labubu</h2>
    <p>Precio: $5.000</p>
    <form action="producto.php" method="POST">
      <input type="hidden" name="nombre" value="Labubu">
      <input type="hidden" name="precio" value="5000">
      <button type="submit">Agregar al carrito</button>
    </form>
  </div>
</body>
</html>
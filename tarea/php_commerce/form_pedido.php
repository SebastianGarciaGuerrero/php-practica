<form action="registrar_pedido.php" method="POST">
    <label>Descripción:</label>
    <input type="text" name="descripcion" required><br>

    <label>Tipo de pedido:</label>
    <input type="text" name="tipo" required><br>

    <label>Producto:</label>
    <input type="text" name="producto" required><br>

    <label>Unidades:</label>
    <input type="number" name="unidades" required><br>

    <label>Observaciones:</label><br>
    <textarea name="observaciones" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Registrar Pedido">
</form>
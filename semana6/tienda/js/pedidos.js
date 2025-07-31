function crearPedido(usuario, carrito) {
    return {
    usuario,
    productos: carrito,
    fecha: new Date().toISOString(),
    estado: "pendiente",
    };
}

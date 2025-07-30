function validarProducto() {
    const nombre = document.forms["formProducto"]["nombre"].value;
    const precio = document.forms["formProducto"]["precio"].value;
    if (nombre === "" || isNaN(precio)) {
    alert("Complete correctamente todos los campos");
    return false;
    }
    return true;
}
function validarCliente() {
    const email = document.forms["formCliente"]["email"].value;
    if (!email.includes("@")) {
    alert("Correo no válido");
    return false;
    }
    return true;
}

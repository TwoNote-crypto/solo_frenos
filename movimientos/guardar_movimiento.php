<?php
include("../conexion.php");

$producto_id = $_POST['producto_id'] ?? '';
$tipo = $_POST['tipo'] ?? '';
$cantidad = $_POST['cantidad'] ?? 0;
$observacion = $_POST['observacion'] ?? '';

// Validaciones básicas
if ($producto_id == '' || $tipo == '' || $cantidad <= 0) {
    echo "Datos inválidos";
    exit();
}

// obtener producto actual
$resultado = $conexion->query("SELECT * FROM productos WHERE id=$producto_id");

if ($resultado->num_rows == 0) {
    echo "Producto no encontrado";
    exit();
}

$p = $resultado->fetch_assoc();

// Validar salida
if ($tipo == "Salida") {

    if ($cantidad > $p['cantidad']) {
        echo "No hay suficiente stock";
        exit();
    }

    if (empty($observacion)) {
        echo "La observación es obligatoria para salidas";
        exit();
    }

    $nueva = $p['cantidad'] - $cantidad;

} else {
    $nueva = $p['cantidad'] + $cantidad;
}

// actualizar stock
$conexion->query("UPDATE productos SET cantidad=$nueva WHERE id=$producto_id");

// guardar movimiento
$conexion->query("
    INSERT INTO movimientos (producto_id,tipo,cantidad,observacion)
    VALUES ('$producto_id','$tipo','$cantidad','$observacion')
");

// redirigir
header("Location: /solo_frenos/inventario/productos.php");
exit();
?>
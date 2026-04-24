<?php
include("../conexion.php");

$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$observacion = $_POST['observacion'];

$p = $conexion->query("SELECT * FROM productos WHERE id=$producto_id")->fetch_assoc();

if ($cantidad > $p['cantidad']) {
    echo "Sin stock";
    exit();
}

$total = $cantidad * $precio;

$nueva = $p['cantidad'] - $cantidad;
$conexion->query("UPDATE productos SET cantidad=$nueva WHERE id=$producto_id");

$conexion->query("
INSERT INTO ventas (producto_id,cantidad,precio,total)
VALUES ('$producto_id','$cantidad','$precio','$total')
");

$conexion->query("
INSERT INTO movimientos (producto_id,tipo,cantidad,observacion)
VALUES ('$producto_id','Salida','$cantidad','$observacion')
");

header("Location: /solo_frenos/ventas/ventas.php");
exit();
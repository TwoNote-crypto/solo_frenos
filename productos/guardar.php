<?php
include("../conexion.php");

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$stock_minimo = $_POST['stock_minimo'];
$precio = $_POST['precio'];

$conexion->query("
INSERT INTO productos (codigo,nombre,cantidad,stock_minimo,precio)
VALUES ('$codigo','$nombre','$cantidad','$stock_minimo','$precio')
");

header("Location: /solo_frenos/productos/productos.php");
exit();
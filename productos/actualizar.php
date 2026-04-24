<?php
include("../conexion.php");

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$stock_minimo = $_POST['stock_minimo'];

$sql = "UPDATE productos 
        SET codigo='$codigo',
            nombre='$nombre',
            cantidad='$cantidad',
            stock_minimo='$stock_minimo'
        WHERE id=$id";

$conexion->query($sql);

header("Location: /solo_frenos/productos/productos.php");
exit();
?>
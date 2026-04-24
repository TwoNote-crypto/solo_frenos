<?php
include("../conexion.php");

$id = $_GET['id'];

$conexion->query("DELETE FROM productos WHERE id=$id");

header("Location: /solo_frenos/productos/productos.php");
exit();
?>
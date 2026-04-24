<?php
include("../conexion.php");

$id = $_GET['id'];

$p = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();

echo json_encode($p);
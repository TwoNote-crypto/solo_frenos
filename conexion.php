<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "solo_frenos";

$conexion = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Opcional: usar UTF-8 (muy recomendado)
$conexion->set_charset("utf8");
?>
<?php
session_start();
include("../conexion.php");

if (isset($_POST['correo']) && isset($_POST['password'])) {

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {

        $_SESSION['usuario'] = $correo;
        header("Location: ../panel.php"); // 🔥 ARREGLADO
        exit();

    } else {
        echo "Datos incorrectos";
    }

} else {
    echo "No se enviaron datos";
}
?>
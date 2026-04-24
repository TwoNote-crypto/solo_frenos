<?php
include("../conexion.php");
include("../layout/header.php");
include("../layout/sidebar.php");

$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM productos WHERE id=$id");
$p = $resultado->fetch_assoc();
?>

<div class="card">
    <h2>✏️ Editar Producto</h2>

    <form method="POST" action="actualizar_producto.php">

        <input type="hidden" name="id" value="<?php echo $p['id']; ?>">

        <input type="text" name="codigo" value="<?php echo $p['codigo']; ?>" required><br><br>

        <input type="text" name="nombre" value="<?php echo $p['nombre']; ?>" required><br><br>

        <input type="number" name="cantidad" value="<?php echo $p['cantidad']; ?>" required><br><br>

        <input type="number" name="stock_minimo" value="<?php echo $p['stock_minimo']; ?>" required><br><br>

        <button>Actualizar</button>
    </form>

    <br>
    <a href="/solo_frenos/productos/productos.php">⬅ Volver</a>
</div>

<?php include("../layout/footer.php"); ?>
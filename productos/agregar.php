<?php
include("../layout/header.php");
include("../layout/sidebar.php");
?>

<div class="card form-center">
    <h2>➕ Agregar Producto</h2>

    <form method="POST" action="guardar_producto.php" class="form-grid">

        <input type="text" name="codigo" placeholder="Código" required>
        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="number" name="cantidad" placeholder="Cantidad" required>
        <input type="number" name="stock_minimo" placeholder="Stock mínimo" required>

        <input class="form-full" type="number" step="0.01" name="precio" placeholder="Precio" required>

        <button class="form-full">Guardar Producto</button>
    </form>

    <a class="volver" href="/solo_frenos/productos/productos.php">⬅ Volver</a>
</div>

<?php include("../layout/footer.php"); ?>
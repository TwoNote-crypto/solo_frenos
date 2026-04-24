<?php
include("../layout/header.php");
include("../layout/sidebar.php");
include("../conexion.php");

$productos = $conexion->query("SELECT * FROM productos");
?>

<div class="card form-center">
    <h2>💰 Registrar Venta</h2>

    <form method="POST" action="guardar_venta.php" class="form-grid">

        <input class="form-full" list="listaProductos" name="producto_id" placeholder="Buscar producto" required>

        <datalist id="listaProductos">
            <?php while($p = $productos->fetch_assoc()) { ?>
                <option value="<?php echo $p['id']; ?>">
                    <?php echo $p['nombre']; ?>
                </option>
            <?php } ?>
        </datalist>

        <input type="number" step="0.01" name="precio" placeholder="Precio" required>
        <input type="number" name="cantidad" placeholder="Cantidad" required>

        <select name="metodo">
            <option>Efectivo</option>
            <option>Transferencia</option>
            <option>Tarjeta</option>
        </select>

        <select name="tipo_obs">
            <option value="Venta">Venta</option>
            <option value="Ingreso">Ingreso</option>
            <option value="Otro">Otro</option>
        </select>

        <input class="form-full" type="text" name="observacion" placeholder="Observación">

        <button class="form-full">Guardar Venta</button>
    </form>
</div>

<?php include("../layout/footer.php"); ?>
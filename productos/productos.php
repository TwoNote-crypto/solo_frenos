<?php
include("../layout/header.php");
include("../layout/sidebar.php");
include("../conexion.php");

// FILTRO
$buscar = $_GET['buscar'] ?? '';

$sql = "SELECT * FROM productos WHERE nombre LIKE '%$buscar%' OR codigo LIKE '%$buscar%'";
$resultado = $conexion->query($sql);
?>

<div class="card">
    <h2>📦 Inventario</h2>

    <!-- FILTROS -->
    <form method="GET" class="filtros">
        <input type="text" name="buscar" placeholder="Buscar producto..." value="<?php echo $buscar; ?>">
        <button>Buscar</button>
    </form>

    <a class="btn" href="/solo_frenos/productos/agregar_producto.php">➕ Agregar Producto</a>

    <table class="table-center">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        <?php while($p = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $p['codigo']; ?></td>
            <td><?php echo $p['nombre']; ?></td>
            <td><?php echo $p['cantidad']; ?></td>

            <td>
                $<?php echo number_format($p['precio'], 2); ?>
            </td>

            <td>
                <?php if ($p['cantidad'] <= $p['stock_minimo']) { ?>
                    <span class="bad">Bajo</span>
                <?php } else { ?>
                    <span class="good">OK</span>
                <?php } ?>
            </td>

            <td>
                <a class="btn" href="editar_producto.php?id=<?php echo $p['id']; ?>">✏️</a>
                <a class="btn" href="eliminar_producto.php?id=<?php echo $p['id']; ?>">🗑️</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

<?php include("../layout/footer.php"); ?>
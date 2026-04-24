<?php
include("../layout/header.php");
include("../layout/sidebar.php");
include("../conexion.php");

// Filtros
$tipo = $_GET['tipo'] ?? '';
$fecha_inicio = $_GET['inicio'] ?? '';
$fecha_fin = $_GET['fin'] ?? '';

// Query base
$sql = "SELECT movimientos.*, productos.nombre 
        FROM movimientos
        JOIN productos ON movimientos.producto_id = productos.id
        WHERE 1=1";

// Filtro tipo
if ($tipo != '') {
    $sql .= " AND movimientos.tipo='$tipo'";
}

// Filtro fecha inicio
if ($fecha_inicio != '') {
    $sql .= " AND movimientos.fecha >= '$fecha_inicio 00:00:00'";
}

// Filtro fecha fin (IMPORTANTE corregido)
if ($fecha_fin != '') {
    $sql .= " AND movimientos.fecha <= '$fecha_fin 23:59:59'";
}

// Orden
$sql .= " ORDER BY movimientos.fecha DESC";

$resultado = $conexion->query($sql);
?>

<div class="card">
    <h2>📊 Movimientos</h2>

    <!-- FILTROS -->
    <form method="GET" style="display:flex; gap:10px; align-items:center;">
        
        <select name="tipo">
            <option value="">Todos</option>
            <option value="Ingreso" <?php if($tipo=='Ingreso') echo 'selected'; ?>>Ingreso</option>
            <option value="Salida" <?php if($tipo=='Salida') echo 'selected'; ?>>Salida</option>
        </select>

        <input type="date" name="inicio" value="<?php echo $fecha_inicio; ?>">
        <input type="date" name="fin" value="<?php echo $fecha_fin; ?>">

        <button>Filtrar</button>
    </form>

    <br>

    <table>
        <tr>
            <th>Producto</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Observación</th>
            <th>Usuario</th>
            <th>Fecha</th>
        </tr>

        <?php if ($resultado && $resultado->num_rows > 0) { ?>
            <?php while($m = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $m['nombre']; ?></td>

                <td>
                    <?php if ($m['tipo'] == "Ingreso") { ?>
                        <span class="good">Ingreso</span>
                    <?php } else { ?>
                        <span class="bad">Salida</span>
                    <?php } ?>
                </td>

                <td><?php echo $m['cantidad']; ?></td>
                <td><?php echo $m['observacion']; ?></td>
                <td><?php echo $m['fecha']; ?></td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="5">No hay movimientos registrados</td>
            </tr>
        <?php } ?>

    </table>
</div>

<?php include("../layout/footer.php"); ?>
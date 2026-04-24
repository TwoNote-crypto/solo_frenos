<?php
include("conexion.php");
include("layout/header.php");
include("layout/sidebar.php");

// Consultas
$total = $conexion->query("SELECT COUNT(*) as total FROM productos");
$bajo = $conexion->query("SELECT COUNT(*) as bajo FROM productos WHERE cantidad <= stock_minimo");
$lista = $conexion->query("SELECT * FROM productos WHERE cantidad <= stock_minimo");

// Validar resultados
$total = $total ? $total->fetch_assoc() : ['total' => 0];
$bajo = $bajo ? $bajo->fetch_assoc() : ['bajo' => 0];
?>

<div class="card">
    <h2>📊 Dashboard</h2>
    <p>Bienvenido, <?php echo $_SESSION['usuario']; ?> 👋</p>
</div>

<!-- KPIs -->
<div style="display:flex; gap:20px;">

    <div class="card" style="flex:1; text-align:center;">
        <h3>📦</h3>
        <h2><?php echo $total['total']; ?></h2>
        <p>Total productos</p>
    </div>

    <div class="card" style="flex:1; text-align:center;">
        <h3>⚠️</h3>
        <h2 style="color:red;"><?php echo $bajo['bajo']; ?></h2>
        <p>Bajo stock</p>
    </div>

</div>

<!-- ALERTAS -->
<div class="card">
    <h3>🚨 Alertas de stock bajo</h3>

    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Stock mínimo</th>
            <th>Estado</th>
        </tr>

        <?php if ($lista && $lista->num_rows > 0) { ?>
            <?php while($p = $lista->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $p['nombre']; ?></td>
                <td><?php echo $p['cantidad']; ?></td>
                <td><?php echo $p['stock_minimo']; ?></td>
                <td><span class="bad">Crítico</span></td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4">Todo está en buen estado 👍</td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include("layout/footer.php"); ?>
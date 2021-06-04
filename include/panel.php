<?php 

    $consulta  = "SELECT COUNT(codigo) as usuarios FROM empleado";
    $conexion = mysqli_query($mysqli, $consulta);
    $usuarios = mysqli_fetch_array($conexion);

    $consulta1  = "SELECT COUNT(codigo) as activos FROM empleado WHERE status = 1";
    $conexion1 = mysqli_query($mysqli, $consulta1);
    $activos = mysqli_fetch_array($conexion1);

    $consulta2  = "SELECT COUNT(codigo) as inactivos FROM empleado WHERE status = 0";
    $conexion2 = mysqli_query($mysqli, $consulta2);
    $inactivos = mysqli_fetch_array($conexion2);


?>

<div class="card-group">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Usuarios</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $usuarios['usuarios']; ?></h5>
                <a href="usuarios.php" class="btn btn-outline-light">Usuarios totales</a>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Activos</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $activos['activos']; ?></h5>
                <a href="usuarios_activos.php" class="btn btn-outline-light">Usuarios activos</a>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Inactivos</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $inactivos['inactivos']; ?></h5>
                <a href="usuarios_inactivos.php" class="btn btn-outline-light">Usuarios inactivos</a>
            </div>
        </div>
    </div>
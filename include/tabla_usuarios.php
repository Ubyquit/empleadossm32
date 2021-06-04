<div class="container-md">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">AP</th>
                <th scope="col">AM</th>
                <th scope="col">Email</th>
                <th scope="col">Nif</th>
                <th scope="col">Departamento</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //consulta mysql para verificar que los datos en la db sean los correctos.
            $consulta = "SELECT
                            empleado.nombre AS nombre_empleado,
                            departamento.nombre AS nombre_departamento,
                            apellido1,
                            apellido2,
                            email,
                            nif,
                            `status` 
                         FROM
                            empleado
                            INNER JOIN departamento ON empleado.codigo_departamento = departamento.codigo";
           
           //primero realizamos la conexión y despues mandamos la consulta.
            $conexion = mysqli_query($mysqli, $consulta);
            $contador = 1;
            while ($fila = mysqli_fetch_array($conexion)) {
            ?>

                <tr>
                    <th scope="row"><?php echo $contador; ?></th>
                    <td><?php echo $fila['nombre_empleado']; ?></td>
                    <td><?php echo $fila['apellido1']; ?></td>
                    <td><?php echo $fila['apellido2']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['nif']; ?></td>
                    <td><?php echo $fila['nombre_departamento']; ?></td>
                    <td><?php
                            if ($fila['status'] == 1) {
                                echo "Activo";
                            } else {
                                echo "inactivo";
                            }
                        ?>
                    </td>
                </tr>

            <?php $contador++;
            } ?>

        </tbody>
    </table>
</div>
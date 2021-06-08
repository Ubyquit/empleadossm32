<?php

include_once '../con/conexion.php';

$id_usuario = $_GET['id_usuario'];


//consulta mysql para verificar que los datos en la db sean los correctos.
//$consulta = "DELETE FROM empleado WHERE codigo = $id_usuario";
$consulta = "UPDATE empleado SET status = 0 WHERE codigo = $id_usuario";


//primero realizamos la conexión y despues mandamos la consulta.
$consulta_insert = mysqli_query($mysqli,$consulta);


header("Location: http://localhost/empleadossm32/empleado/usuarios.php")

?>




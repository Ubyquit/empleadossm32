<?php

include_once '../con/conexion.php';

$id_usuario = $_GET['id_usuario'];

$consulta_usuario = "SELECT status FROM empleado WHERE codigo = '$id_usuario'";
$conexion_usuario = mysqli_query($mysqli,$consulta_usuario);
$fila = mysqli_fetch_array($conexion_usuario);

if($fila['status'] == 0){

    $consulta = "UPDATE empleado SET status = 1 WHERE codigo = $id_usuario";

}else{

    $consulta = "UPDATE empleado SET status = 0 WHERE codigo = $id_usuario";

}

//primero realizamos la conexión y despues mandamos la consulta.
$consulta_insert = mysqli_query($mysqli,$consulta);

header("Location: http://localhost/empleadossm32/empleado/usuarios.php");

?>




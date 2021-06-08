<?php

include_once '../con/conexion.php';
//print_r($_POST);

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];

// contraseña random

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// tipo Output: iNCHNGzByPjhApvn7XBD
$password =  generate_string($permitted_chars, 20);




//consulta mysql para verificar que los datos en la db sean los correctos.
$consulta = "INSERT INTO empleados.empleado(email, password, nombre, apellido1, apellido2, status) 
VALUES ('$email', '$password', '$nombre', '$apellido1', '$apellido2',1)";
//primero realizamos la conexión y despues mandamos la consulta.
$consulta_insert = mysqli_query($mysqli,$consulta);


header("Location: http://localhost/empleadossm32/empleado/usuarios.php")

?>




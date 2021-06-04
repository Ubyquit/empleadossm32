<?php 
    include_once '../con/conexion.php';
    //print_r($_POST);

    $email = $_POST['email'];
    $password = $_POST['password'];

    //consulta mysql para verificar que los datos en la db sean los correctos.
    $consulta = "SELECT * FROM  empleado WHERE email  = '$email' and password = '$password' and status = 1";
    //primero realizamos la conexión y despues mandamos la consulta.
    $consulta_login = mysqli_query($mysqli,$consulta);
    $fila = mysqli_fetch_array($consulta_login);
    if(sizeof($fila) > 0){
        if($fila['password'] == $password){
            session_start();
            $_SESSION['ID'] = $fila['codigo'];
            $_SESSION['NOMBRE'] = $fila['nombre'];
            $_SESSION['EMAIL'] = $fila['email'];
            $_SESSION['STATUS'] = $fila['status'];
            $respuesta  = 1;
        }else{
            echo "La contraseña es incorrecta.";
        }
    }else{
        echo "El email es incorrecto.";

    }

    if($respuesta == 1){
        header('Location: ../empleado/index.php');
    }else{
        header('Location: ../index.html');
    }
?>

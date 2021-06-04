<?php
    //Parametros de conexión
    $server = "localhost";
    $user = "ubyquit";
    $password = "Holamundo2017";
    $database = "empleados";

    //Variable de conexión
    $mysqli = mysqli_connect($server, $user, $password, $database);
    //Verificar si la conexión fue correcta

    if(mysqli_connect_errno($mysqli)){
        //Escanear los problemas de conexión
        echo "No se ha conectado"." ".mysqli_connect_error();
    }else{
       // echo "Conexión exitosa";
    }
?>
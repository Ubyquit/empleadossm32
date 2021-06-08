<?php
session_start();

require_once '../con/conexion.php';

$varsesion = $_SESSION['ID'];
$nombre = $_SESSION['NOMBRE'];

if ($varsesion == "" || $varsesion == NULL) {
    echo "Acceso denegado";
    header("Location: ../index.html");
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Creación de usuario</title>
</head>

<body>
    <!-- Inicio de navbar -->
    <?php include "../include/navbar.php"; ?>
    <!-- Final de navbar -->


    <h3>Dar de alta a usuario nuevo</h3>
    <!-- Inicio de formulario -->
    <div class="container-lg">
        <form action="crear_usr_query.php" method="post">
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Correo electronico</label>
                <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Inputnombre" class="form-label">Nombres</label>
                <input name="nombre" type="text" class="form-control" id="Inputnombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Inputapellido1" class="form-label">Apellido paterno</label>
                <input name="apellido1" type="text" class="form-control" id="Inputapellido1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Inputapellido2" class="form-label">Apellido materno</label>
                <input name="apellido2" type="text" class="form-control" id="Inputapellido2" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Final de formulario -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
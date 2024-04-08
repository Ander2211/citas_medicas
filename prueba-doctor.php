<?php
session_start();
echo(var_dump($_SESSION["usuario_actual"]));


if(!isset($_SESSION["usuario_actual"])){
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Eres un Doctor </h1>
    <h2>Bienvenido</h2>

    <a href="controladores/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>
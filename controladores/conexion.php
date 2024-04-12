<?php
    $conexion = mysqli_connect("localhost", "root", "", "citas__medicas");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
?>

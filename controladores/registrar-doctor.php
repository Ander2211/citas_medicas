<?php

    include("conexion.php");

    if (isset($_POST["register"])){
        if(
            $_POST['name'] >= 1 &&
            $_POST['email'] >= 1 &&
            $_POST['password'] >= 1 
        ){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $rol = 2;
            $consulta = "INSERT INTO datos(id_cargo, nombre, email, password, fecha)
                VALUES('$rol','$name', '$email', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                header('Location: registro-exitoso.php');
            } else {
                ?>
                <h3 class="error">Sucedio un error</h3>
                <?php
            }
        } else {
            ?>
            <h3 class="error">LLENA TODOS LOS CAMPOS</h3>
            <?php
        }
    }

?>
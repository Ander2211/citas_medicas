<?php
    session_start();
    include("conexion.php");
    
    if (isset($_POST["inicio"])){
        if(
            $_POST['email'] >= 1 &&
            $_POST['password'] >= 1
        ){
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $query = "SElECT id, nombre, email FROM datos WHERE email = '$email' AND password = '$password'";
            $resultado = mysqli_query($conex, $query);
            $resultado = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            if(empty($resultado)){
                
                echo('error');
            }else{
                $_SESSION["usuario_actual"] = $resultado; 
                header('Location: prueba.php');
            }
        }
    }
?>
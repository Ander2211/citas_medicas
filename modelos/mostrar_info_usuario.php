<?php

include('../../controladores/conexion.php');

//Obtener nombre, apellido y foto de perfil de tabla usuario
$id_usuario = $_SESSION['id_usuario'];
$sql = "SELECT nombre , apellido, foto_perfil FROM usuarios WHERE id_usuario = $id_usuario";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $nombre_paciente = $fila['nombre'];
    $apellido_paciente = $fila['apellido'];
    $foto_perfil = $fila['foto_perfil'];
    
} else {
    $nombre_paciente = "Paciente";
}


    $texto = "$foto_perfil";
    $posicion = strpos($texto, "img-bd");
    if ($posicion !== false) {
        $nueva_foto_perfil = substr($texto, $posicion);
        
    } else {
        echo "No se encontró 'img-bd' en el texto.";
    }


//Obtener email de tabla credenciales
$id_usuario = $_SESSION['id_usuario'];
$sql = "SELECT c.email
        FROM credenciales c
        INNER JOIN usuarios u ON c.id_credencial = u.id_credencial
        WHERE u.id_usuario = $id_usuario";
$resultado = mysqli_query($conexion, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $email = $row['email'];
} else {
    // Error al obtener el email
    $email = "No disponible";
}
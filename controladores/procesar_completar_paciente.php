<?php
// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "conexion.php"; // Archivo con la conexión a la base de datos

    // Recibir y limpiar los datos del formulario
    $id_credencial = $_POST['id_credencial'];
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $departamento = mysqli_real_escape_string($conexion, $_POST['departamento']);
    $municipio = mysqli_real_escape_string($conexion, $_POST['municipio']);

    // Procesar la foto de perfil
    $foto_perfil = $_FILES['foto_perfil']['name'];
    $foto_temporal = $_FILES['foto_perfil']['tmp_name'];
    $ruta_foto = "C:/xampp/htdocs/citas_medicas/img-bd/".$foto_perfil; 
    move_uploaded_file($foto_temporal, $ruta_foto);

    // Insertar la información en la tabla 'usuarios'
    $id_rol = 3; // Rol de paciente
    $sql_usuario = "INSERT INTO usuarios (nombre, apellido, telefono, fecha_nacimiento, genero, foto_perfil, id_rol, id_credencial, id_departamento, id_municipio) 
                    VALUES ('$nombre', '$apellido', '$telefono', '$fecha_nacimiento', '$genero', '$ruta_foto', $id_rol, $id_credencial, $departamento, $municipio)";
    if (mysqli_query($conexion, $sql_usuario)) {
        // Redirigir al usuario a una página de éxito o a donde sea necesario
        header("Location: http://localhost/citas_medicas/registro-exitoso.php");
        exit;
    } else {
        echo "Error al guardar la información: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

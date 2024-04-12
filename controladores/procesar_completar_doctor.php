<?php
// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (debes tener tu propia conexión)
    require_once "conexion.php"; // Archivo con la conexión a la base de datos

    // Recibir y limpiar los datos del formulario
    $id_credencial = $_POST['id_credencial'];
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $numero_colegiado = mysqli_real_escape_string($conexion, $_POST['numero_colegiado']);
    $biografia = mysqli_real_escape_string($conexion, $_POST['biografia']);
    $id_especialidad = $_POST['id_especialidad'];
    $id_hospital = $_POST['id_hospital'];

    // Procesar la foto de perfil
    $foto_perfil = $_FILES['foto_perfil']['name'];
    $foto_temporal = $_FILES['foto_perfil']['tmp_name'];
    $ruta_foto = "C:/xampp/htdocs/citas_medicas/img-bd/".$foto_perfil; // Cambiar la ruta según tu estructura de carpetas
    move_uploaded_file($foto_temporal, $ruta_foto);

    // Insertar la información en la tabla 'usuarios'
    $sql_usuario = "INSERT INTO usuarios (nombre, apellido, telefono, fecha_nacimiento, genero, foto_perfil, id_rol, id_credencial) 
                    VALUES ('$nombre', '$apellido', '$telefono', '$fecha_nacimiento', '$genero', '$ruta_foto', 2, $id_credencial)";
    if (mysqli_query($conexion, $sql_usuario)) {
        $id_usuario = mysqli_insert_id($conexion); // Obtener el ID del usuario insertado

        // Insertar la información en la tabla 'doctores'
        $sql_doctor = "INSERT INTO doctores (id_usuario, id_especialidad, id_hospital, numero_colegiado, biografia) 
                        VALUES ($id_usuario, $id_especialidad, $id_hospital, '$numero_colegiado', '$biografia')";
        if (mysqli_query($conexion, $sql_doctor)) {
            // Redirigir al usuario a una página de éxito o a donde sea necesario
            header("Location: http://localhost/citas_medicas/registro-exitoso.php");
            exit;
        } else {
            echo "Error al guardar la información en doctores: " . mysqli_error($conexion);
        }
    } else {
        echo "Error al guardar la información en usuarios: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

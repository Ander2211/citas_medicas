<?php
// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    require_once "conexion.php"; 

    // Recibir los datos del formulario según el rol seleccionado
    $rol = $_POST['rol'];
    if ($rol == 3) { 
        $email = mysqli_real_escape_string($conexion, $_POST['email_paciente']);
        $password = mysqli_real_escape_string($conexion, $_POST['password_paciente']);
        $sql_credenciales = "INSERT INTO credenciales (email, password) VALUES ('$email', '$password')";
    } else if ($rol == 2) { 
        $email = mysqli_real_escape_string($conexion, $_POST['email_doctor']);
        $password = mysqli_real_escape_string($conexion, $_POST['password_doctor']);
        $sql_credenciales = "INSERT INTO credenciales (email, password) VALUES ('$email', '$password')";
    }

    // Insertar las credenciales en la tabla 'credenciales'
    if (mysqli_query($conexion, $sql_credenciales)) {
        $id_credencial = mysqli_insert_id($conexion);

        // Redirigir al usuario a la pantalla de completar información adecuada
        if ($rol == 3) { 
            header("Location: http://localhost/citas_medicas/registro-paciente.php?id=$id_credencial");
            exit;
        } else if ($rol == 2) { 
            header("Location: http://localhost/citas_medicas/registro-med.php?id=$id_credencial");
            exit;
        }
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

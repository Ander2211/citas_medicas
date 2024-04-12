<?php
session_start();
// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (debes tener tu propia conexión)
    require_once "conexion.php"; // Archivo con la conexión a la base de datos

    // Recibir y limpiar los datos del formulario
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    // Consulta para verificar las credenciales
    $sql = "SELECT u.id_usuario, u.id_rol, r.nombre_rol 
            FROM usuarios u 
            INNER JOIN credenciales c ON u.id_credencial = c.id_credencial
            INNER JOIN roles r ON u.id_rol = r.id_rol 
            WHERE c.email = '$email' AND c.password = '$password'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['id_rol'] = $row['id_rol'];
        

        if ($_SESSION['id_rol'] == 3) { // Paciente
            header("Location: http://localhost/citas_medicas/secciones/paciente/Usuario.php");
            exit;
        } elseif ($_SESSION['id_rol'] == 2) { // Doctor
            header("Location: http://localhost/citas_medicas/secciones/doctor/Perfil-Dr.php");
            exit;
        }
    } else {
        echo "Credenciales incorrectas";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

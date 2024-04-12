<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión de Doctor</title>
</head>
<body>
    <h1>Bienvenido, Doctor</h1>
    <p>Esta es la página de sesión para doctores. Aquí puedes mostrar la información específica del doctor logueado, como su biografía, disponibilidad, etc.</p>

    <?php
    // Iniciar la sesión
    session_start();

    // Verificar si la sesión está activa y es un doctor
    if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 2) { // Rol 2 = Doctor
        // Mostrar información del doctor
        echo "<p>ID de Usuario: {$_SESSION['id_usuario']}</p>";
        
        // Aquí puedes mostrar más información del doctor según tu base de datos
    } else {
        // Si no es un doctor, redirigir a la página de inicio de sesión
        header("Location: index.php");
        exit;
    }
    ?>

    <br>
    <a href="controladores/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>

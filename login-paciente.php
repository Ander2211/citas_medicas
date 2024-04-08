<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" enctype="multipart/form-data">
                <h1>Registrate como Paciente</h1>
               
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button class="btn" type="submit" name="register" value="send">Registrarse</button>
            </form>
            <?php
                include("controladores/registrar.php");
            ?>
           
        </div>
        <div class="form-container sign-in">
            <form method="post" enctype="multipart/form-data">
                <h1>Iniciar Sesión como Paciente</h1>
                
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
              
                <button class="btn" type="submit" name="inicio" value="send">Iniciar sesion</button>
            </form>

            <?php
                include("controladores/inicioSesion.php");
            ?>
          
        </div> 
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hola de nuevo</h1>
                    <p>¿Eres doctor?

                        <a class="doctor" href="">Registrate</a>
                    </p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido a MEDILINK</h1>
                    <p>¿No tienes una cuenta? Registrate</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="JS/script.js"></script>
</body>
</html>
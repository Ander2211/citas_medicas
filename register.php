<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style-register.css">
    <title>Registrate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<nav style="background-color: #011526;" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="http://localhost/citas_medicas/">MEDILINK</a>
      <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">¿Quiénes Somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Doctores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Soy Médico</a>
          </li>
          
        </ul>
        <ul class="nav justify-content-end">

          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="http://localhost/citas_medicas/login.php">Inicia Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="http://localhost/citas_medicas/register.php">Registrate</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="contenedor">
        <div class="container1" id="container1">
            <div class="form-container sign-up">
                <form method="post" action="controladores/procesar-registro.php">
                    <input type="hidden" name="rol" value="2">
                    <h1>Registrate como doctor</h1>
                    <input type="email" placeholder="Correo electronico" name="email_doctor" required>
                    <input type="password" placeholder="Contraseña" name="password_doctor" required>
                    <button type="submit">Enviar</button>
                    
                </form>
            </div>
            <div class="form-container sign-in">
                <form method="post" action="controladores/procesar-registro.php">
                    <input type="hidden" name="rol" value="3">
                    <h1>Registrate como paciente</h1>
                    <input type="email" placeholder="Correo electronico" name="email_paciente" required>
                    <input type="password" placeholder="Contraseña" name="password_paciente" required>
                
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Hola de nuevo</h1>
                        <p>
                            ¿Quieres registrarte como paciente?
                        </p>
                        <button class="hidden" id="login">Registrarme</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Bienvenido a MEDILINK</h1>
                        <p>¿Quieres registrarte como doctor?</p>
                        <button class="hidden" id="register">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
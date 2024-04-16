<?php
   
    session_start();

    include('../../controladores/conexion.php');

    if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 3) { 
   
    } else {
        header("Location: index.php");
        exit;
    }

    include "../../modelos/mostrar_info_usuario.php";
    ?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil de usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    
    .perf {
      width: 430px;
      height: 873px;
      background-color: #011526;
    }

    #texto-centrado{
      margin-top: -40%;
      margin-left: 7%;
      align-items: center;

    }

    @media (max-width: 768px){
      .perf {
            width: 430px;
            height: 525px;
            background-color: #011526;
            
        }
    }
    @media (max-width: 768px) {
            #texto-centrado {
                position: static;
                transform: none;
                margin-top: 3%;
            }
        }
input{
width: 250px;
margin: 20px;
}


  </style>

</head>
<header>
  <!-- nav-bar -->
  <nav style="background-color: #011526;" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-bold ms-2" href="#">MEDILINK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex flex-grow-1 collapse navbar-collapse ms-4" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="Usuario.php">
              <p class="fw-bolder">Mi Cuenta</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#"><?php echo $email ?></a>
          </li>

        </ul>


        <ul class="nav justify-content-end">

          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="../../controladores/cerrar_sesion.php"><button type="button" class="btn btn-dark" style="background-color: #011526;">Cerrar Sesion</button></a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
</header>


<body style=" background-color: #E4F2F1;">

  <div class="perf">
    <img src="../../<?php echo $nueva_foto_perfil ?>" alt="DR" class="  mt-4 "
      style="height: 250px; width:250px;border-radius:121px; margin-left: 23%;">
    <div class="text-white mt-4 fw-bold fs-5" style="text-align: center; ;margin-bottom: 12%;">
      <p><?php echo $nombre_paciente . " " . $apellido_paciente ?> </p>
    </div>
    <a href="CitasUser.php" style=" text-decoration: none; ">
      <p class="text-white fs-5 fw-light" style=" margin-top: 4%; text-align: center;">Mis Citas</p>
    </a>
    <a href="#" style=" text-decoration: none; ">
      <p class="text-white fs-5 fw-light" style=" margin-top: 7%; text-align: center;">Configuracion de la cuenta </p>
    </a>
  </div>

  <div class="text-center" id="texto-centrado">
    <p class="fw-bold fs-2 ">Configuración de la cuenta</p>

    <div class="container mt-5">
      <form>
        <!-- Campo de texto para el nombre -->
        <div class="form-group">
          <label for="nombre" class="fw-semibold fs-4" >Nombre</label>
          <input type="text" class="form-control-sm" id="nombre" placeholder="Ingresa tu nombre">
        </div>
        <!-- Campo de texto para los apellidos -->
        <div class="form-group">
          <label for="apellidos" class="fw-semibold fs-4">Apellidos</label>
          <input type="text" class="form-control-sm" id="apellidos" placeholder="Ingresa tus apellidos">
        </div>
        <!-- Campo de texto para la dirección -->
        <div class="form-group">
          <label for="direccion" class="fw-semibold fs-4">Dirección</label>
          <input type="text" class="form-control-sm" id="direccion" placeholder="Ingresa tu dirección">
        </div>
        <!-- Campo de texto para el teléfono -->
        <div class="form-group">
          <label for="telefono"class="fw-semibold fs-4">Teléfono</label>
          <input type="tel" class="form-control-sm" id="telefono" placeholder="+503 0000-0000">
        </div>
        
      </form>
    </div>

    <div class="d-flex justify-content-between" style="padding-top: 30px;">
      <div style="margin-left:35% ;">
        <!-- Tus dos elementos a la izquierda -->
        <span><a href="#"><button type="button" class="btn fs-5 fw-normal " style="background-color: #026873;color: white;">  Guardar</button></a></span>
        <span><a href="Usuario.html"><button type="button" class="btn fs-5 fw-normal " style="color: #026873;">Cancelar</button></a></span>
      </div>
      <div>
        <!-- Tu elemento a la derecha -->
        <span><a href="#"><button type="button" class="btn fs-5 fw-normal " >X    Elimiar cuenta</button></a></span>
      </div>
    </div>



  </div>


  


  








  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
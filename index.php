<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
   
    <title>Document</title>
</head>
<body style="background-color: #E4F2F1;">

  <!-------------------------------------------- NAVBAR  -------------------------------------------------->

  <nav style="background-color: #011526;" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">MEDILINK</a>
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
            <a class="nav-link active text-light" aria-current="page" href="http://localhost/login/login-paciente.php">Inicia Sesión como Paciente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="http://localhost/login/login-doctor.php">Inicia Sesión como Doctor</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-------------------------------------------- HERO  -------------------------------------------------->

  <div style="border: none;" class="card text-bg-dark">
    <img src="img/hero.png" class="card-img img-fluid" alt="...">
    <div style="position: absolute; top:20%; left:20%;"class="card-img-overlay">
      <h5 style="color:#03A6A6; font-size: 80px;" class="fw-bold text-break" class="card-title">MEDILINK</h5>
      <p style="color: black;" class="card-text fs-1 fw-bold">Encuentra a tu <br> <span style="color:#03A6A6;">médico</span> ideal</p>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button style="border:none; background-color:#026873; color:white; position:absolute; left:10%; font-size:40px; margin-top:20px" class="btn btn-primary" type="button">Haz tu cita</button>
        
      </div>
    </div>
  </div>







  <!-- <div class="position-relative">
    <img src="img/hero.png" class="img-fluid" alt="">
    <div style="position: absolute; top:20%; left:20%;">
      <h1 style="color:#03A6A6; font-size: 80px;" class="fw-bold">MEDILINK</h1>
      <p class="text-center fw-bold fs-1">Encuentra a tu <br> <span style="color:#03A6A6;">médico</span> ideal</p>
      <a href="busqueda.html">

        <button type="button" class="btn" style="background-color:#026873; color:white; position:absolute; left:25%; font-size:40px; margin-top:20px">Haz tu cita</button>
      </a>
    </div>
  </div> -->


  <!-------------------------------------------- SECTION - QUIENES SOMOS  -------------------------------------------------->

  <div class="card mb-3 ps-5" style="max-width: 100%; border: none; background-color: #E4F2F1;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/doctor-1.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body px-5">
          <h2 style="font-size:50px; background-color: #03A6A6; margin-top:10%; border-radius:10px; color:white; padding: 10px;" class="card-title text-center">¿Quiénes somos?</h2>
          <p style="color: #026873;" class="card-text fs-3">Bienvenidos a MEDILINK, un centro médico comprometido con la salud y el bienestar de nuestros pacientes. Desde nuestra fundación en 2024, nos hemos dedicado a proporcionar atención médica de alta calidad y servicios integrales para satisfacer las necesidades de nuestra comunidad.</p>
          <p style="color: #026873;" class="fs-3">En MEDILINK, nuestro equipo está compuesto por médicos altamente cualificados, enfermeras dedicadas y personal administrativo atento, todos trabajando juntos para ofrecer un cuidado integral y personalizado. Nos esforzamos por establecer relaciones de confianza con nuestros pacientes, brindando un ambiente cálido y acogedor donde se sientan cómodos y seguros.</p>
        </div>
      </div>
    </div>
  </div> 


  <!-------------------------------------------- SECTION - SERVICIOS  -------------------------------------------------->
  <div class="d-flex justify-content-center">

    <h1 class="text-center w-75" style="font-size:50px; background-color: #03A6A6; margin-top:10%; border-radius:10px; color:white; padding: 10px;">Nuestros Servicios</h1>
  </div>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div style="background-color: #D9B391;" class="col border rounded">
          <img width="338" height="250" src="img/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" class="img-fuild rounded mt-2" alt="">
            <h2 class="fs-2">Agenda tu cita a cualquier hora</h2>
            <p class="text-center p-3 fw-semibold">Nuestra amplia red de médicos y especialistas te ayudará a encontrar el horario perfecto para tu cita, busca y agenda a cualquier hora!</p>
            
        </div>
      </div>
      <div class="col">
        <div style="background-color: #D9B391;" class="col border rounded">
          <img width="338" height="250" src="img/national-cancer-institute-L8tWZT4CcVQ-unsplash.jpg" class="img-fuild rounded mt-2" alt="">
            
          <h2 class="fs-2">¡Encuentra a tu médico mas cercano!</h2>
            <p class="text-center p-3 fw-semibold">Encuentra a tu médico y especialista más cercano, tu salud es primero y es primordial que ante cualquier emergencia tengas ayuda cerca.</p>
            
        </div>
      </div>
      <div class="col">
        <div style="background-color: #D9B391;" class="col border rounded">
          <img width="338" height="250" src="img/sander-sammy-38Un6Oi5beE-unsplash.jpg" class="img-fuild rounded mt-2" alt="">
            
            <h2 class="fs-2">¡Elige a tu médico de confianza!</h2>
            <p class="text-center p-1 fw-semibold">Puedes explorar en nuestra red, y elegir a tu médico y especialista favorito! Revisa y deja valoraciones a los médicos para ayudar a más personas a cuidar de su salud en un ambiente de confianza.</p>
        </div>
      </div>
    </div>
  </div>


  <!-------------------------------------------- SECTION - REGISTRARTE - USUARIO -------------------------------------------------->


    <div style="margin-top: 5%;" class="position-relative">

      <img class="w-100 img-fluid" src="img/baner-cita.png" alt="">
      <div style="position: absolute; top:20%; left:20%;">
        <p class="text-center fw-bold" style="font-size: 50px;">Registrate y obten un 10% de <br> descuento en tu primera cita</p>
        <button type="button" class="btn" style="background-color:#026873; color:white; position:absolute; left:25%; top:250px; font-size:60px;">Registrarme</button>
      </div>
    </div>
    

    <!-------------------------------------------- SECTION - REGISTRARTE - MEDICO  -------------------------------------------------->

    <div class="container text-center">
      <div class="row">
        <div class="col">
          <img class="w-100 mt-5" src="img/doctor-2.png" class="img-fuild" alt="">
        </div>
        <div class="col">
          <p class="text-center fw-bold mt-5" style="font-size: 50px;">¿Eres médico o <br> especialista?</p>
          <p><br>Mejora la experiencia para tus pacientes, más productividad y mayor visibilidad. Un servicio completo para médicos y profesionales de la salud con consulta privada.
            <ul>
              <li>Proporciona un canal de agendamiento 24/7 con disponibilidad de citas en tiempo real.</li><br>
              <li>Facilita y mejora la comunicación con tus pacientes.</li><br>
              <li>Aumenta tu visibilidad y reputación online.</li><br>
            </ul>
            ¿Que esperas para unirte a la red más grande de médicos y especialistas de El Salvador?</p>     
            <button type="button" class="btn" style="background-color:#026873; color:white; position:absolute; left:65%; top:3600px; font-size:60px;">Unirme</button>
        </div>
      </div> 
    </div>


    <!-------------------------------------------- SECTION - FOOTER -------------------------------------------------->

    
    <div style="background-color: #011526; color:white; margin-top:10%;" class="hstack gap-3">
      <div class="p-2">
        <h2 class="navbar-brand text-light fw-bold ms-2 fs-1">MEDILINK</h2>
          <div class="ms-5" style="font-size:30px;">

            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-whatsapp"></i>
          </div>
      </div>
      <div class="p-2 ms-auto">
        <h3>Pacientes</h3>
        <p>Iniciar Sesión</p>
        <p>Conoce nuestra red de médicos</p>
        <p>Contáctanos</p>
      </div>
      <div class="vr"></div>
      <div class="p-2">
        <h3>Médicos</h3>
        <p>Unete a la red de médicos</p>
        <p>Iniciar Sésion</p>
        <p>Contáctanos</p>
      </div>
    </div>








  <script src="https://kit.fontawesome.com/27620428d0.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
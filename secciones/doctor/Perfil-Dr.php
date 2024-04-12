<?php
    // Iniciar la sesión
    session_start();

    // Verificar si la sesión está activa y es un doctor
    if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 2) { // Rol 2 = Doctor
        // Mostrar información del doctor
        
        // Aquí puedes mostrar más información del doctor según tu base de datos
    } else {
        // Si no es un doctor, redirigir a la página de inicio de sesión
        header("Location: index.php");
        exit;
    }
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil del doctor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .perf {
            width: 430px;
            height: 1130px;
            background-color: #011526;
            
        }
        @media (max-width: 768px) {
            .perf {
                height: 715px;
                width: 100%;
                
            }
        }


        /* Text: "Sobre mi" */
        #texto-centrado {
            position: absolute;
            top: 15%;
            left: 42%;
            font-size: 24px;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #texto-centrado {
                position: static;
                transform: none;
                margin-top: 30px;
            }
        
        }

        /* 1er. Parrafo */
        #parrafo1 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 25px;
            top: 26%;
            left: 56%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #parrafo1 {
                font-size: 11px;
                top: 105%;
                left: -24%;
                transform: inherit;
                margin-top: 4px;
                
            }
        }


        /* Text: "Especialista en:" */
        #especialidad {
            position: absolute;
            top:45%;
            left: 45%;
            font-size: 24px;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #especialidad {
                position: static;
                transform: none;
                margin-top: 120px;
            }
        }

        /* 2do. Parrafo */
        #parrafo2 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 50%;
            left: 45%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #parrafo2 {
                position: static;
                transform: none;
                margin-top: 4px;
                margin-left: 25%;
            }
        }

        /*Text "Idiomas:"*/
        #lang {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 65%;
            left: 42.8%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #lang {
                position: static;
                transform: none;
                margin-top: 41px;
                margin-left: 40%;
            }
        }

        /*Español e ingles*/
        #parrafo3 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 70%;
            left: 42%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #parrafo3 {
                position: static;
                transform: none;
                margin-top: 4px;
                margin-left: 30%;
            }
        }

        /* Mapa */
        .map {
            margin-left: 140%;
            margin-top: 8%;
        }

        @media (max-width: 768px) {
            .map {
                position: static;
                transform: none;
                margin-top: 4px;
                margin-left: 1px;
            }
        }


        .contn{
            padding: 4% 1%;
        }
    </style>

</head>

<body style=" background-color: #E4F2F1;">
    <!-- nav-bar -->
    <nav style="background-color: #011526;" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold ms-2" href="#">MEDILINK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex flex-grow-1 collapse navbar-collapse ms-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">¿Quiénes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Doctores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Soy Médico</a>
                    </li>
                </ul>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="Perfil-Dr-Edit.php"><button type="button" class="btn btn-primary">Editar Perfil</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../../controladores/cerrar_sesion.php">Cerrar sesion </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- img de perfil y datos del doctor -->
    <div class=" perf">
        <img src="../../img/Dr11.jpg" alt="DR" class="  mt-4 "
            style="height: 250px; width: auto;border-radius:121px; margin-left: 110px;">

        <!-- Nombre, estecialidad y lugar  -->
        <div class="text-white mt-4 fw-bold fs-5" style="margin-left:80px ;">
            <p>Dra. Karla María Rodriguez Cruz</p>
        </div>
        <p class="text-white fs-5 fw-light" style="margin-left: 180px; margin-top: -20px;">Nutricionista</p>
        <p class="text-white fs-6 fw-lighter" style="margin-left: 150px; margin-top: 40px;">San Salvador, Soyapango</p>

        <!-- estrellas -->
        <div class="stars" style=" margin-left: 125px;">
            <i class="fas fa-star star-1" style="color:white "></i>
            <i class="fas fa-star star-2" style="color:#e6f0ff "></i>
            <i class="fas fa-star star-3" style="color:#ccdfff "></i>
            <i class="fas fa-star star-4" style="color:#b3ceff "></i>
            <i class="fas fa-star star-5" style="color:  #99bdff"></i>
            <a href="#" class=" text-white fs-6 fw-lighter" style="margin-left: 15px; margin-top: -22px;">150
                Opiniones</a>.


            <p class="text-white" style="margin: 30px 20px;"><strong class="text-white">Atiende: </strong> Niños y
                adultos </p>

            <p class="text-white fs-6 fw-normal" style="margin-left: 40px; margin-top: 30px;">Tel: +503 7983-3823</p>
            <a type="button" class="btn fs-3 "
                style="background-color: #026873;color: white;margin: 30px 15px; " href="Admin.php">Reserva tu cita</a>
        </div>







        <div class="container contn">

            <div class="text-center ">
                <!-- Texto que quieres que se mantenga centrado -->
    
                <p class="fw-semibold fs-1  " id="texto-centrado">Sobre mí</p>
                <div >
                    <pr class="fw-light   lh-sm " id="parrafo1">
                    Nutrióloga clínica especialista en dietas para bajar de peso y
                    control de patologías crónicas en la colonia Venecia en
                    Soyapango, diseño menús personalizados ajustados a tu
                    estilo de vida. Dieta keto, ayuno intermitente, dieta paleo.</pr>
                </div>
            </div>
    
            <div class="text-center ">
                <!-- Texto que quieres que se mantenga centrado -->
                <p class="fw-semibold fs-2 " id="especialidad">Especialista en: </p>
                <ul class="fw-light fs-4  lh-sm" id="parrafo2">
                    <li>Nutrición Clínica </li>
                </ul>
            </div>
    
            <div class="text-center ">
                <!-- Texto que quieres que se mantenga centrado -->
                <p class="fw-semibold fs-2 " id="lang">Idiomas: </p>
                <ul class="fw-light fs-4  lh-sm" id="parrafo3">
                    <li>Inglés</li>
                    <li>Español</li>
                </ul>
            </div>
    
    
    
    
    
            <div class="container map">
                <div class="row">
                    <div class="col-12">
                        <p class=" fw-semibold fs-3 text-center ">Ubicacion de la Clínica</p>
                        
                        <div class="embed-responsive embed-responsive-16by9">
                            <!-- El código de Google Maps va aquí -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d653.2929497680822!2d-89.14086377724448!3d13.71516057245938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2ssv!4v1712420003967!5m2!1ses-419!2ssv"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        















        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
</body>

</html>
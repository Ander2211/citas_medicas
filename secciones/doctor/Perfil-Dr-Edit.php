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
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .perf {
            width: 430px;
            height: 1030px;
            background-color: #011526;
            
        }
        .container{
            padding-top: 20px;
        }

        @media (max-width: 768px) {
            .perf {
                
                height: 715px;
                width: 100%;
            }
            .entra{
                font-size: 11px;
            }

            .container{
            padding-top: 40px;
        }
        }


        .entra{
            font-size: 25px;
        }

        @media (max-width: 768px) {
            #texto-centrado {
                position: static;
                transform: none;
                margin-top: 120px;
            }
            
        }

        /* 1er. Editor del Parrafo */
        #edit-parrafo1 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 20%;
            left: 53%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #edit-parrafo1 {
                font-size: 15px;
                top: 105%;
                left: -11%;
                transform: inherit;
                margin-top: 70px;
                margin-left:15%;
                margin-right: 5%;
            }
        }


        /* Text: "Especialista en:" */
        #especialidad {
            position: absolute;
            top: 40%;
            left: 45%;
            
            font-size: 30px;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #especialidad {
                position: static;
                transform: none;
                margin-top: 100%;
            }
        }

        /* Eelegir el tipo de especialidad*/
        #parrafo2 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 45%;
            left: 45%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #parrafo2 {
                position: static;
                transform: none;
                
                margin-left: 15%;
                margin-right: 10%;
            }
        }

        /*Text "Idiomas:"*/
        #lang {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 30px;
            top: 55%;
            left: 42%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #lang {
                position: static;
                transform: none;
                margin-top: 9px;
                margin-left: 40%;
            }
        }

        /*Español e ingles*/
        #parrafo3 {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            font-size: 20px;
            top: 60%;
            left: 42%;
            text-align: justify;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 768px) {
            #parrafo3 {
                position: static;
                transform: none;
                margin-top: 10px;
                margin-left: 30%;
            }
        }


        /* Mapa */
        .map {
            margin-left: 150%;
            margin-top: -25%;
        }

        @media (max-width: 768px) {
            .map {
                position: static;
                transform: none;
                margin-top: 40px;
                margin-left: 1px;
                align-items: center;
            }
        }
    </style>

</head>

<body style=" background-color: #E4F2F1;">
    <!-- nav-bar -->
    <nav style="background-color: #011526;" class="navbar navbar-expand-lg position-sticky">
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

                        <a href="Perfil-Dr.php"><button type="button" class="btn btn-primary" id="liveToastBtn">Listo
                                </button>

                            <div class="toast align-items-center text-bg-primary border-0" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Los cambios se hicieron correctaente
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="Perfil-Dr.php">Cancelar</a>
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
        <div class="text-white mt-4 fw-bold fs-5" style="margin-left:4%; margin-right: 4%;">
            <input class="form-control" type="text" placeholder="Ingrese su nombre" aria-label="default input example">
        </div>
        <p class="text-white fs-5 fw-light" style="margin-left: 40%; margin-top: 20px;">-Especialista-</p>
        <p class="text-white fs-6 fw-lighter" style="margin-left: 10%; margin-top: 5%; margin-right: 10%;"><input
                class="form-control form-control-sm" type="text" placeholder="Distrito,municipio"
                aria-label=".form-control-sm example">
        </p>

        <!-- estrellas -->
        <div class="stars" style=" margin-left: 125px;">
            <i class="fas fa-star star-1" style="color:white "></i>
            <i class="fas fa-star star-2" style="color:#e6f0ff "></i>
            <i class="fas fa-star star-3" style="color:#ccdfff "></i>
            <i class="fas fa-star star-4" style="color:#b3ceff "></i>
            <i class="fas fa-star star-5" style="color:  #99bdff"></i>
            <a href="#" class=" text-white fs-6 fw-lighter" style="margin-left: 15px; margin-top: -22px;">0
                Opiniones</a>.


            <p class="text-white" style="margin: 30px 20px;"><strong class="text-white">Atiende: </strong> <select
                    class="form-select" style="margin-left: -15%;" aria-label="Default select example">
                    <option selected>Selecione:</option>
                    <option value="1">Niños</option>
                    <option value="2">Adultos</option>
                    <option value="3">Niños y adultos</option>
                </select> </p>
            <p class="text-white fs-6 fw-lighter" style="margin-left: 0%; margin-top: 5%; margin-right: 40%;"><input
                    class="form-control form-control-sm" type="text" placeholder="+503 0000-0000"
                    aria-label=".form-control-sm example">
            </p>
        </div>



        <div class="container">
            <div class="text-center ">
                
    
                <!-- Texto de "Sobre mi" -->
                <form>
                    <div class="form-group" id="edit-parrafo1">
                        <label class="entra fw-light" for="textoTextarea">Entrada de Texto (máximo 250 caracteres):</label>
                        <!-- Textarea que se expande con clases de Bootstrap para el estilo y límite de caracteres -->
                        <textarea class="form-control form-control-sm" id="textoTextarea" rows="7"
                            placeholder="Agregue una breve descripcion sobre usted..." maxlength="250"
                            oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'"></textarea>
                    </div>
                </form>
            </div>
    
    
            <!-- Eleccion de la especialidad -->
            <div class="text-center ">
                <!-- Texto que quieres que se mantenga centrado -->
                <p class="fw-semibold " id="especialidad">Especialista en: </p>
                <ul class="fw-light  lh-sm" id="parrafo2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Elija su especialidad</option>
                        <option value="1">Doctor/a</option>
                        <option value="2">Nutricionista</option>
                        <option value="3">Pedriatria</option>
                        <option value="4">Odontología</option>
                        <option value="5">Oncología radioterápica</option>
                    </select>
                </ul>
            </div>
    
    
    
            <!-- Eleccion del idioma -->
            <div class="text-center ">
                <!-- Texto que quieres que se mantenga centrado -->
                <p class="fw-semibold " id="lang">Idiomas: </p>
                <ul class="fw-light  lh-sm" id="parrafo3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ingles
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Español
                        </label>
                    </div>
                </ul>
            </div>
    
    
    
            <!-- Mapa/Ubicacion -->
            <div class="container map">
                <div class="row">
                    <div class="col-12">
                        <p class=" fw-semibold fs-3 text-center ">Cambiar la ubicación</p>
                        <!-- El código de Google Maps va aquí y la edicion aqui -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848.2443820057331!2d-89.14044663325076!3d13.714118616797105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63377043c00001%3A0x7d81d67aa39e8a6b!2sUnidad%20de%20Salud%20%7C%20Unicentro!5e1!3m2!1ses-419!2ssv!4v1712441469862!5m2!1ses-419!2ssv"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>












        <script>
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')

            if (toastTrigger) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                toastTrigger.addEventListener('click', () => {
                    toastBootstrap.show()
                })
            }
        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>




</body>

</html>
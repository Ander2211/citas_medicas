<?php
   
    session_start();

    if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 3) { 
   
    } else {
        header("Location: index.php");
        exit;
    }
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .perf {
            width: 430px;
            height: 925px;
            background-color: #011526;

        }

        @media (max-width: 768px) {
            .perf {
                width: 430px;
                height: 525px;
                background-color: #011526;

            }
        }

        .table {
            margin: 3% 10%;
            width: 80%;
        }
    </style>

</head>
<header>
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
                        <a class="nav-link active text-light" aria-current="page" href="#">
                            <p class="fw-bolder">Mi Cuenta</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Email:
                            anderhdz06@gmail.com</a>
                    </li>

                </ul>


                <ul class="nav justify-content-end">
                    
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="Usuario.php"><button type="button" class="btn btn-dark" style="background-color: #011526;">Regresar al su perfil</button></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>


<table>
    <div class="table-responsive">
        <table class="table table-bordered table">
            <thead>
                <tr style="border: 1px solid black">
                    <td scope="col" style="
              background-color: #03a6a6;
              color: white;
              font-weight: 600;
              font-size: 17px;
              text-align: center;
            ">
                        Asunto
                    </td>
                    <td scope="col" style="
              background-color: #03a6a6;
              color: white;
              font-weight: 600;
              font-size: 17px;
              text-align: center;
            ">
                        Paciente
                    </td>
                    <td scope="col" style="
              background-color: #03a6a6;
              color: white;
              font-weight: 600;
              font-size: 17px;
              text-align: center;
            ">
                        Medico
                    </td>
                    <td scope="col" style="
              background-color: #03a6a6;
              color: white;
              font-weight: 600;
              font-size: 17px;
              text-align: center;
            ">
                        Hora y fecha
                    </td>
                    <td scope="col" style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            "></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            ">
                        Chequeo de rutina
                    </td>
                    <td style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            ">
                        Juan Carlos Ramirez Perez
                    </td>
                    <td style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            ">
                        Dra. Carmen Elena Arias Bonilla
                    </td>
                    <td style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            ">
                        20-4-2024 9:00am
                    </td>
                    <td style="
              background-color: #03a6a6;
              color: black;
              font-weight: 400;
              font-size: 17px;
              text-align: center;
            ">
                        <a href="#"><button type="button" class="btn btn-primary">Editar</button></a>

                        <!-- Boton de "Eliminar" -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" >
                                <div class="modal-content" style="background-color: #011526;">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 " id="exampleModalLabel" style="color: white;">
                                            Advertencia
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="color: white;">
                                        ¿Está seguro que quiere eliminar su cita con su doctor?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #026873;">
                                            Cancelar
                                        </button>
                                        <a href="#"><button type="button" class="btn btn-primary" style="background-color: #026873;">
                                                Si, estoy seguro
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</table>













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
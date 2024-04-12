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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador de Citas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <style>
        .table {
            margin: 3% 10%;
            width: 80%;
        }

        @media (min-width: 430px){
            .busq1{
            margin-left: -43%;
            width: 120%;
            }
            .busq2{
                margin-left: 0%;
            }
            .busq3{
                margin-left: -3%;
            }
            
            .busq4{
                margin-left: 2%;
                margin-top: -50%;
                width: 121%;
            }
        }

        @media (max-width: 430px) {
            .table {
                margin: 3% 0%;
                width: 80%;
            }
        }

        @media (max-width: 430px) {
            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (min-width: 430px) {
            .table-responsive {
                overflow-x: visible;
            }
        }

        
    </style>
</head>

<header>
    <!-- nav-bar -->
    <nav style="background-color: #011526" class="navbar navbar-expand-lg">
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
                        <a href="Perfil-Dr.php"><button type="button" class="btn btn-outline-light">
                                Visualizar cuenta
                            </button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../../controladores/cerrar_sesion.php">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="container mt-5 ">


        <div class="grid-container">
            <!-- Fila de inputs -->
            <div class="row">
                <!-- Input de texto con icono de lupa -->
                <div class="col " style="margin-left: 15.6%;">
                    <div class="input-group mb-3  busq1">
                        <div class="input-group-prepend">
                            <span style="padding: 10px; border-radius: 15px; z-index: 3; margin-left: 80px;
                " class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                        </div>
                        <input style="border-radius: 15px; max-width: 55%;" type="text" class="form-control" placeholder="      Buscar"
                            aria-label="Buscar" aria-describedby="basic-addon1" />
                    </div>
                </div>


                <!-- Dropdown de paciente con icono de persona -->
                <div class="col" >
                    <div class="input-group mb-3  busq2">
                        <div class="input-group-prepend">
                            <span style="padding: 10px; border-radius: 15px" class="input-group-text"
                                id="basic-addon2"><i class="fas fa-user"></i></span>
                        </div>
                        <select style="border-radius: 15px" class="custom-select" id="inputGroupSelect01">
                            <option selected>Paciente...</option>
                            <!-- Opciones del dropdown -->
                        </select>
                    </div>
                </div>
            </div>


            <div class="grid-container">
                <!-- Dropdown de doctor con icono de doctor -->
                <div class="col"  style ="margin-left: 22%;">
                    <div class="input-group mb-5  busq3" >
                        <div class="input-group-prepend">
                            <span style="padding: 10px; border-radius: 15px" class="input-group-text"
                                id="basic-addon3"><i class="fas fa-user-md"></i></span>
                        </div>
                        <select style="border-radius: 15px " class="custom-select" id="inputGroupSelect02">
                            <option selected  style ="max-width:33%; margin-left: 55%;">Doctor...</option>
                            <!-- Opciones del dropdown -->
                        </select>
                    </div>
                </div>


                <!-- Input de calendario con icono de calendario -->
                <div class="col " style="margin-left: 58.5%; margin-top: 17%; ">
                    <div class="input-group mb-3 busq4">
                        <div class="input-group-prepend">
                            <span style="padding: 10px; border-radius: 15px" class="input-group-text"
                                id="basic-addon4"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input style="border-radius: 15px; max-width: 25%;" type="date" class="form-control" aria-label="Fecha"
                            aria-describedby="basic-addon4" />
                    </div>
                </div>
            </div>
        </div>

    </div>

    

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
                            Cardiólogia
                        </td>
                        <td style="
                  background-color: #03a6a6;
                  color: black;
                  font-weight: 400;
                  font-size: 17px;
                  text-align: center;
                ">
                            José Alberto
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
                            <a href="#"><button type="button" class="btn btn-success">Aceptar</button></a>

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
                                            Esta seguro que quiere eliminar la cita con su paciente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <a href="#"><button type="button" class="btn btn-primary">
                                                    Si, estoy seguro
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" style="
                  background-color: #03a6a6;
                  color: black;
                  font-weight: 400;
                  font-size: 17px;
                  text-align: center;
                ">
                            Cardiólogia
                        </td>
                        <td style="
                  background-color: #03a6a6;
                  color: black;
                  font-weight: 400;
                  font-size: 17px;
                  text-align: center;
                ">
                            José Alberto
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
                            <a href="#"><button type="button" class="btn btn-success">Aceptar</button></a>
                            <!-- Boton de "Eliminar" -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Advertencia
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Esta seguro que quiere eliminar la cita con su paciente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <a href="#"><button type="button" class="btn btn-primary">
                                                    Si, estoy seguro
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" style="
                  background-color: #03a6a6;
                  color: black;
                  font-weight: 400;
                  font-size: 17px;
                  text-align: center;
                ">
                            Cardiólogia
                        </td>
                        <td style="
                  background-color: #03a6a6;
                  color: black;
                  font-weight: 400;
                  font-size: 17px;
                  text-align: center;
                ">
                            José Alberto
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
                            <a href="#"><button type="button" class="btn btn-success">Aceptar</button></a>
                            <!-- Boton de "Eliminar" -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Advertencia
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Esta seguro que quiere eliminar la cita con su paciente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <a href="#"><button type="button" class="btn btn-primary">
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

    <script src="https://kit.fontawesome.com/tu-codigo.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
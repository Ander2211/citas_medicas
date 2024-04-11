<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-registro-med.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body style="background-color: #E4F2F1;">
    
        <!----------------------- Main Container -------------------------->
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <!----------------------- Register Container -------------------------->
            <div class="row border rounded-5 p-3 bg-white shadow box-area rounded-3">
                <!--------------------------- Left Box ----------------------------->
                <div class="col-md-4 rounded d-flex justify-content-center align-items-center flex-column left-box"
                    style="background: #011526;">
                    <p class="text-white fs-2" style="font-weight: 600;">
                        MEDILINK
                    </p>
                    <div class="featured-image mb-3">
                        <img src="Assets/Medicos.png" class="img-fluid" style="width: 250px; aspect-ratio: 5/4">
                    </div>
                </div>
                <!-------------------- ------ Right Box ---------------------------->
                <div class="col-md-8 right-box ">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Bienvenido a MEDILINK</h2>
                            <p>Por favor, completa tu información para continuar.</p>
                        </div>
                        <form method="post" action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nombre Completo" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Número de licencia" required>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select form-control-lg bg-light fs-6" id="floatingSelect" required>
                                    <option selected disabled>Selecciona tu especialidad</option>
                                    <option value="1">Médico General</option>
                                    <option value="2">Médico Ortopeda</option>
                                    <option value="3">Médico Pediatra</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Número de telefono" required>
                            </div>
                            <label for="date">Selecciona tu fecha de nacimiento</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control form-control-lg bg-light fs-6" id="date" placeholder="" required>
                            </div>
                            <label for="">Ingresa tu dirección</label>
                            <div class="input-group mb-3">
                                <select class="form-select form-control-lg bg-light fs-6" id="floatingSelect" required>
                                    <option selected disabled>Selecciona tu departamento</option>
                                    <option value="1">San Salvador</option>
                                    <option value="2">Santa Ana</option>
                                    <option value="3">Ahuachapan</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select form-control-lg bg-light fs-6" id="floatingSelect" required>
                                    <option selected disabled>Selecciona tu municipio</option>
                                    <option value="1">San Salvador este</option>
                                    <option value="2">San Salvador centro</option>
                                    <option value="3">San Salvador norte</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Calle / Local / o referencia" required>
                            </div>
                            <label for="">Sube una foto de perfil</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-lg bg-light fs-6" id="foto" required>
                            </div>
                            
                            <label for="genderRadio">Selecciona tu genero</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="genderRadio">
                                <label class="form-check-label" for="genderRadio">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="genderRadio">
                                <label class="form-check-label" for="genderRadio">
                                    Femenino
                                </label>
                            </div>

                            <div class="input-group mt-3 justify-content-center">
                                <button type="submit" class="btn btn-lg w-50 fs-6" style="background-color: #03A6A6; color: #E4F2F1;" >Completar registro</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
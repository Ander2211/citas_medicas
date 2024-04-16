<!DOCTYPE html>
<html lang="es">
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
                        <img src="Assets/Pacientes.png" class="img-fluid" style="width: 250px; aspect-ratio: 4/3">
                    </div>
                </div>
                <!-------------------- ------ Right Box ---------------------------->
                <div class="col-md-8 right-box ">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Bienvenido a MEDILINK <?php echo $_GET['id']; ?></h2>
                            <p>Por favor, completa tu información para continuar.</p>
                        </div>
                        <form method="post" action="controladores/procesar_completar_paciente.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_credencial" value="<?php echo $_GET['id']; ?>">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nombre" name="nombre" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Apellido" name="apellido" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Número de telefono" name="telefono" required>
                            </div>
                            <label for="date">Selecciona tu fecha de nacimiento</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control form-control-lg bg-light fs-6" id="date" name="fecha_nacimiento" placeholder="" required>
                            </div>
                            <label for="">Ingresa tu dirección</label>
                            <div class="input-group mb-3">
                                <select name="departamento" id="departamento" class="form-select form-control-lg bg-light fs-6" id="floatingSelect" required>
                                    <option selected disabled>Selecciona tu departamento</option>
                                    <?php
                                    // Consultar la tabla departamentos para obtener los departamentos disponibles
                                    require_once "controladores/conexion.php"; 
                                    $sql_departamentos = "SELECT * FROM departamentos";
                                    $resultado_departamentos = mysqli_query($conexion, $sql_departamentos);
                                    while ($fila_departamento = mysqli_fetch_assoc($resultado_departamentos)) {
                                        echo "<option value='{$fila_departamento['id_departamento']}'>{$fila_departamento['nombre_departamento']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="municipio" id="municipio" class="form-select form-control-lg bg-light fs-6" id="floatingSelect" required>
                                    <option selected disabled>Selecciona tu municipio</option>
                                    <?php
                                    // Consultar la tabla municipios para obtener los municipios disponibles
                                    $sql_municipios = "SELECT * FROM municipios";
                                    $resultado_municipios = mysqli_query($conexion, $sql_municipios);
                                    while ($fila_municipio = mysqli_fetch_assoc($resultado_municipios)) {
                                        echo "<option value='{$fila_municipio['id_municipio']}'>{$fila_municipio['nombre_municipio']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Dirección" required>
                            </div>
                            <label for="">Sube una foto de perfil</label>
                            <div class="input-group mb-3">
                                <input type="file" name="foto_perfil" accept="image/*" class="form-control form-control-lg bg-light fs-6" id="foto" required>
                            </div>
                            
                            <label for="genderRadio">Selecciona tu genero</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="M" id="genderRadio">
                                <label class="form-check-label" for="genderRadio">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="F" id="genderRadio">
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
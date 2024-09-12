<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PWD</title>
</head>

<body>
    <?php
    include_once("../../utils/functions.php");
    include_once("../assets/structure/header.php");
    
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 38rem;">
            <div class="card-header">
                <h3>Cargar nueva persona</h3>
                <p>Ingrese los datos de la persona:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio6" method="post" action="action.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="NroDni" class="form-label">DNI:</label>
                        <input class="form-control" type="text" pattern="[0-9]{8}" id="NroDni" name="NroDni" placeholder="30123456..." maxlength="8" required>
                        <div class="invalid-feedback">
                            Ingrese un DNI, sin espacios y sin puntos.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Apellido" class="form-label">Apellido:</label>
                        <input class="form-control" type="text" pattern="([a-zA-Z]{1,20})" id="Apellido" name="Apellido" placeholder="Apellido..." required>
                        <div class="invalid-feedback">
                            Ingrese un apellido...
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Nombre" class="form-label">Nombre:</label>
                        <input class="form-control" type="text" pattern="([a-zA-Z]{1,20})" id="Nombre" name="Nombre" placeholder="Nombre..." required>
                        <div class="invalid-feedback">
                            Ingrese un nombre...
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fechaNac" class="form-label">Fecha de Nacimiento:</label>
                        <input class="form-control" type="date" id="fechaNac" name="fechaNac" required>
                        <div class="invalid-feedback">
                            Ingrese la fecha de nacimiento...
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Telefonoi" class="form-label">Teléfono:</label>
                        <input class="form-control" type="text" pattern="\d{3}[-]{1}\d{7}" maxlength="11" id="Telefono" name="Telefono" placeholder="299-1234567..." required>
                        <div class="invalid-feedback">
                            Ingrese un teléfono con el formato 299-1234567
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Domicilio" class="form-label">Domicilio:</label>
                        <input class="form-control" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio..." required>
                        <div class="invalid-feedback">
                            Ingrese un Domicilio.
                        </div>
                    </div>
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-warning me-2">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/jquery6.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 6
    Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
    los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
    un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
    pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
    Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
-->
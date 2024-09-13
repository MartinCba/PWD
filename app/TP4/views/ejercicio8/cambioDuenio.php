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
    include_once("../../../../config.php");
    include_once("../../utils/functions.php");
    include_once("../assets/structure/header.php");
    
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 38rem;">
            <div class="card-header">
                <h3>Cambiar Dueño de un Auto</h3>
                <p>Ingrese la Patente del auto y el DNI del nuevo Dueño:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio8" method="post" action="action.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="Patente" class="form-label">Patente:</label>
                        <input class="form-control" type="text" placeholder="AAA 111..." pattern="[A-Z]{3}[ ]{1}\d{3}" maxlength="7" id="Patente" name="Patente" required>
                        <div class="invalid-feedback">
                            Ingrese una Patente valida! EJ(AAA 111)
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="DniDuenio" class="form-label">DNI:</label>
                        <input class="form-control" type="text" id="DniDuenio" name="DniDuenio" placeholder="40123456..." required>
                        <div class="invalid-feedback">
                            Ingrese un DNI, debe ser sin espacios y sin puntos...
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
        <script src="../assets/js/jquery8.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 8
    Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
    numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
    a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
    ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
    cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
    antes generada, no se puede acceder directamente a las clases del ORM.
-->
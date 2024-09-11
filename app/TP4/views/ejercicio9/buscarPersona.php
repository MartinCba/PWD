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
    include_once("../assets/structure/header.php");
    include_once("../../models/connector/BaseDatos.php");
    include_once "../../models/Persona.php";
    include_once "../../models/Auto.php";
    include_once "../../controllers/PersonaAbm.php";
    include_once "../../controllers/AutoAbm.php";
    $autoAbm = new AutoAbm();
    $parametros = null;
    $arrayAutos = $autoAbm->buscar($parametros);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Buscar Persona</h3>
                <p>Ingrese el número de DNI:</p>
            </div>
            <div class="card-body">
            <form name="ejercicio9" method="post" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input class="form-control" type="text"  pattern="[0-9]{8}" id="NroDni" name="NroDni" placeholder="30123456" maxlength="8" required>
                        <div class="invalid-feedback">
                            Ingrese un DNI, sin espacios y sin puntos.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/jquery9.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 9
    Crear una página “BuscarPersona.php” que contenga un formulario que permita cargar un
    numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
    busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
    formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
    documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
    persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
    antes generada, no se puede acceder directamente a las clases del ORM.
-->
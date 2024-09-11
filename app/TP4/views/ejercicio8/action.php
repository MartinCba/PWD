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
    include_once("../../utils/functions.php");
    include_once("../../models/connector/BaseDatos.php");
    include_once "../../models/Persona.php";
    include_once "../../models/Auto.php";
    include_once "../../controllers/PersonaAbm.php";
    include_once "../../controllers/AutoAbm.php";

    $datos = dataSubmitted();
    $auto = new AutoAbm();
    $persona = new PersonaAbm();

    $busqueda['Patente'] = $datos['Patente'];

    $datosAuto = $auto->buscar($busqueda);

    $nroDni["NroDni"] = $datos["DniDuenio"];
    $datosPersona = $persona->buscar($nroDni);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3>Resultado de la Operación:</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <?php
                    if ($datosAuto != null) {
                        if ($datosPersona != null) {
                            $datosModificados = ["Patente" => $datos["Patente"], "DniDuenio" => $datos["DniDuenio"], "Marca" => $datosAuto[0]->getMarca(), "Modelo" => $datosAuto[0]->getModelo()];
                            if ($auto->modificacion($datosModificados)) {
                                echo '<p class="lead text-success">El cambio de dueño se realizó correctamente!</p>';
                            } else {
                                echo '<p class="lead text-danger">Se ingreso el mismo dueño!</p>';
                            }
                        } else {
                            echo '<p class="lead text-danger">La persona no se encuentra en la base de datos!</p>';
                        }
                    } else {
                        echo ' <p class="lead text-danger">El auto no se encuentra en la base de datos!</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="m-4 d-flex justify-content-around">
                <a href="../ejercicio3/verAutos.php" style="text-decoration: none; color: yellow;">Ver Autos</a>
                <a href="../ejercicio5/listaPersonas.php" style="text-decoration: none; color: yellow;">Ver Personas</a>
                <a class="btn btn-warning" href="cambioDuenio.php">Volver</a>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once("../assets/structure/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
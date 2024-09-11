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

    $resp = false;
    $auto = new AutoAbm();
    $persona = new PersonaAbm();

    //chequear si el dni ingresado existe
    $dni[0] = ["NroDni" => $datos["DniDuenio"]];
    $buscar = $persona->buscar($dni[0]);

    $patente[0] = ["Patente" => $datos["Patente"]];
    $duplicado = $auto->buscar($patente[0]);
    if ($buscar != null and $duplicado == null) {
        if ($auto->alta($datos)) {
            $resp = true;
            $msj = "Auto cargado con éxito!";
        }
    } else {

        if (!$resp) {
            $msj = "No se pudo concretar la operación. ";
        }

        if ($buscar == null) {
            $msj .= "El dni ingresado no se encuentra en la base de datos.";
        }

        if ($duplicado != null) {
            $msj .= " El Vehiculo ya existe en la Base de Datos";
        }
    }
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3>Nuevo Auto</h3>
            </div>
            <div class="card-body">
                <h4><?php echo $msj ?> </h4>
            </div>
            <div class="m-4 d-flex justify-content-around">
                <a href="../ejercicio6/nuevaPersona.php" style="text-decoration: none; color: yellow;">Cargar nuevo Dueño</a>
                <a href="../ejercicio3/verAutos.php" style="text-decoration: none; color: yellow;">Ver Autos</a>
                <a class="btn btn-warning" href="nuevoAuto.php">Volver</a>
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
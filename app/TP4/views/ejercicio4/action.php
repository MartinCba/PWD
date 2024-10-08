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

    $datos = dataSubmitted();
    $autoAbm = new AutoAbm();
    $datosAuto = $autoAbm->obtenerDatosAutoPorPatente($datos['Patente']);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3>Buscar autos</h3>
            </div>
            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <?php
                        if ($datosAuto) {
                            echo "
                        <tr>
                            <th>Patente</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Dni</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                        </tr></thead>";
                            echo
                            "<tbody>
                                <td>{$datosAuto['patente']}</td>
                                <td>{$datosAuto['marca']}</td>
                                <td>{$datosAuto['modelo']}</td>
                                <td>{$datosAuto['dni']}</td>
                                <td>{$datosAuto['apellido']}</td>
                                <td>{$datosAuto['nombre']}</td> 
                        </tbody>";
                        } else {
                            echo "No se encontro la patente ingresada";
                        }
                        echo "</table>";
                        ?>
                        <a class="btn btn-warning" href="buscarAuto.php">Volver</a>

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
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
    function mensaje($datos, $valor)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $estudios = $datos["estudios"];
        $sexo = $datos["sexo"];
        if ($valor) {
            $textoEdad = "Es mayor de edad";
        } else {
            $textoEdad = "Es menor de edad";
        }
        $msj = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>" . $textoEdad . "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . "</br>";

        return $msj;
    }
    $obj = new MayorEdad();
    $valor = $obj->esMayor($datos);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Ejercicio 5</h3>
            </div>
            <div class="card-body">
                <form name="ejercicio1" method="post" action="action.php">
                    <div class="mb-3">
                        <p><?php echo mensaje($datos, $valor) ?></p>
                    </div>
                    <a class="btn btn-warning" href="ejercicio5.php">Volver</a>
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once("../assets/structure/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
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

    function mostrarMensaje($nombre, $valor)
    {
        if ($valor == 0) {
            $mensaje = "<h3>Lo siento, solo se permiten archivos txt.</h3>\n";
        } else {
            $mensaje = "El archivo " . $nombre . " se ha subido con éxito <br />";
            $mensaje .= '<div class = "textoCentrado" ><a href= "../../files/' . $nombre . '">Ver archivo</a></div>';
        }

        return $mensaje;
    }

    $nombre = strtolower($_FILES['archivo']['name']);
    $tamanio = $_FILES['archivo']["size"];
    $dir = "../../files";

    $obj = new CargarArchivo();
    $valor = $obj->analizar($nombre, $tamanio, $dir);
    $msj = mostrarMensaje($nombre, $valor);

    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Ejercicio 1</h3>
            </div>
            <div class="card-body">
                <form name="ejercicio1" method="post" action="action.php">
                    <div class="mb-3">
                        <p><?php echo $msj ?></p>
                    </div>
                    <a class="btn btn-warning" href="ejercicio1.php">Volver</a>
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
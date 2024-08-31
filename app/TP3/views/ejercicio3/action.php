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
    include_once("../../controllers/MostrarPeliculas.php");

    $titulo = $_POST["titulo"];
    $actores = $_POST["actores"];
    $director = $_POST["director"];
    $guion = $_POST["guion"];
    $produccion = $_POST["produccion"];
    $anio = $_POST["anio"];
    $nacionalidad = $_POST["nacionalidad"];
    $genero = $_POST["genero"];
    $duracion = $_POST["duracion"];
    $edad = $_POST["edad"];
    $sinopsis = $_POST["sinopsis"];
    $nombre = strtolower($_FILES['archivo']['name']);
    $tamanio = $_FILES['archivo']["size"];
    $dir = "../../files";





    $obj = new MostrarPeliculas();
    $msj = $obj->mensaje();
    $valor = $obj->mostrarCartelera($nombre, $titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad, $sinopsis);
    $valor2 = $obj->analizar($nombre);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-start bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3 class="text-warning">Cinem@s</h3>
            </div>
            <div class="card-body">
                <form name="ejercicio1" method="post" action="action.php">
                    <div class="mb-3">
                        <p><?php echo $msj ?></p>
                        <p><?php echo $valor ?></p>
                    </div>
                    <a class="btn btn-warning" href="ejercicio3.php">Volver</a>
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
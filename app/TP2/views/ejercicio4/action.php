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

    function mensaje()
    {
        $msj = "<h1>La película introducida es: </h1>";
        return $msj;
    }
    function mostrarCartelera($datos)
    {
        $titulo = $datos["titulo"];
        $actores = $datos["actores"];
        $director = $datos["director"];
        $guion = $datos["guion"];
        $produccion = $datos["produccion"];
        $anio = $datos["anio"];
        $nacionalidad = $datos["nacionalidad"];
        $genero = $datos["genero"];
        $duracion = $datos["duracion"];
        $edad = $datos["edad"];
        $sinopsis = $datos["sinopsis"];

        $msj = "<span class='texto'>Título: </span><span class='descripcion'>" . $titulo . "</span></br>
        <span class='texto'>Actores: </span><span class='descripcion'>" . $actores . "</span></br>
        <span class='texto'>Director: </span><span class='descripcion'>" . $director . "</span></br>
        <span class='texto'>Guion: </span><span class='descripcion'>" . $guion . "</span></br>
        <span class='texto'>Produccion: </span><span class='descripcion'>" . $produccion . "</span></br>
        <span class='texto'>Año: </span><span class='descripcion'>" . $anio . "</span></br>
        <span class='texto'>Nacionalidad: </span><span class='descripcion'>" . $nacionalidad . "</span></br>
        <span class='texto'>Genero: </span><span class='descripcion'>" . $genero . "</span></br>
        <span class='texto'>Duracion: </span><span class='descripcion'>" . $duracion . "</span></br>
        <span class='texto'>Restricciones de Edad: </span><span class='descripcion'>" . $edad . "</span></br>
        <span class='texto'>Sinopsis: </span><span class='descripcion'>" . $sinopsis . "</span></br>";

        return $msj;
    }
    $datos = dataSubmitted();
    $msj = mensaje();
    $valor = mostrarCartelera($datos);
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
                    <a class="btn btn-warning" href="ejercicio4.php">Volver</a>
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
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
    $persona = new PersonaAbm();
    $dni['NroDni'] = $datos['NroDni'];
    $listaPersonas = $persona->buscar($dni);
    if (count($listaPersonas) == 1) {
        if ($persona->modificacion($datos)) {
            $msj = "<p class='lead text-success'>Datos modificados correctamente!</p>";
        } else {
            $msj = "<p class='lead text-danger'>No se modificaron los datos.</p>";
        }
    } else {
        $msj = "<p class='lead text-danger'>El DNI ingresado no existe en la base de datos!</p>";
    }
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Actualizar Datos Personales:</h3>
                <p>Resultado de la operación:</p>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h4><?php echo $msj ?> </h4>
                </div>
            </div>
            <div class="m-4 d-flex justify-content-around">
                <a href="../ejercicio3/verAutos.php" style="text-decoration: none; color: yellow;">Ver Autos</a>
                <a href="../ejercicio5/listaPersonas.php" style="text-decoration: none; color: yellow;">Ver Personas</a>
                <a class="btn btn-warning" href="buscarPersona.php">Volver</a>
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
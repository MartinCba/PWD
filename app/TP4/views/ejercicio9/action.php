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
    $listaPersona = $persona->buscar($datos);
    $cantidad = count($listaPersona);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3>Resultado de la Operación:</h3>
                <p>Modifique los datos que desee cambiar:</p>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <?php
                    if ($cantidad == 0) {
                        echo "No se encontró ninguna persona cargada con ese DNI.";
                    } else {
                        echo "<form name='ejercicio9' method='post' action='actualizarDatosPersona.php' class='row g-3 needs-validation' novalidate>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='NroDni' class='form-label'>DNI:</label>";
                        echo "<input class='form-control' type='text'  id='NroDni' name='NroDni'  value=" . $listaPersona[0]->getNroDni() . " placeholder='30123456...' pattern='[0-9]{8}' maxlength='8' style='color: green;' required readonly>";
                        echo " <div class='invalid-feedback'>
                                    Ingrese un DNI, sin espacios y sin puntos.
                                </div></div>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='Apellido' class='form-label'>Apellido:</label>";
                        echo "<input class='form-control' type='text' value=" . $listaPersona[0]->getApellido() . " id='Apellido' name='Apellido' pattern='([a-zA-Z]{1,20})' placeholder='Apellido...' required>";
                        echo "  <div class='invalid-feedback'>
                                    Debe ingresar un apellido.
                                </div></div>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='Nombre' class='form-label'>Nombre:</label>";
                        echo "<input class='form-control' type='text' value=" . $listaPersona[0]->getNombre() . "  id='Nombre' name='Nombre' pattern='([a-zA-Z]{1,20})' placeholder='Nombre...' required>";
                        echo "  <div class='invalid-feedback'>
                                    Debe ingresar un nombre.
                                </div></div>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='fechaNac' class='form-label'>Fecha de Nacimiento:</label>";
                        echo "<input class='form-control' type='date' value='" . $listaPersona[0]->getFechaNac() . "' id='fechaNac' name='fechaNac' placeholder='1985-01-01' min='1925-01-01' max='2025-01-01' required>";
                        echo "  <div class='invalid-feedback'>
                                    Revise la fecha!
                                </div></div>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='Telefono' class='form-label'>Telefono:</label>";
                        echo "<input class='form-control' type='text' value=" . $listaPersona[0]->getTelefono() . " id='Telefono' name='Telefono' pattern='\d{3}[-]{1}\d{7}' maxlength='11' placeholder='299-1234567' required>";
                        echo "  <div class='invalid-feedback'>
                                    Debe ingresar codigo de area sin 0 '-' y tel sin 15!
                                </div></div>";

                        echo "<div class='col-md-6'>";
                        echo "<label for='Domicilio' class='form-label'>Domicilio:</label>";
                        echo "<input class='form-control' type='text' value=" . $listaPersona[0]->getDomicilio() . " id='Domicilio' name='Domicilio' placeholder='San Martín 123' required>";
                        echo "  <div class='invalid-feedback'>
                                    Debe ingresar un domicilio!
                                </div></div>";


                        echo "<div class='col-12 '>
                        <button type='submit' class='btn btn-warning me-2'>Enviar</button>
                    </div></form>";
                    }
                    ?>
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
    <script src="../assets/js/jquery9.js"></script>
</body>

</html>
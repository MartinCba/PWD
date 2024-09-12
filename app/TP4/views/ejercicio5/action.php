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
    $dni = $datos['NroDni'];

    // Buscar la persona por DNI
    $personaAbm = new PersonaAbm();
    $personas = $personaAbm->buscar(['NroDni' => $dni]);

    $persona = null;
    $autos = [];

    if (!empty($personas)) {
        $persona = $personas[0];

        // Buscar los autos asociados a la persona
        $autoAbm = new AutoAbm();
        $autos = $autoAbm->buscar(['DniDuenio' => $dni]);
    }
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
                        if ($persona !== null) {
                            echo "<h4>Datos de la Persona</h4>";
                            echo "<table class='table table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>Nombre</th>";
                            echo "<th>Apellido</th>";
                            echo "<th>DNI</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td>" . $persona->getNombre() . "</td>";
                            echo "<td>" . $persona->getApellido() . "</td>";
                            echo "<td>" . $persona->getNroDni() . "</td>";
                            echo "</tr>";
                            echo "</tbody>";
                            echo "</table>";

                            if (!empty($autos)) {
                                echo '<h4>Autos Asociados</h4>';
                                echo '<table class="table table-striped">';
                                echo '<thead>
                                <tr>
                                    <th>Patente</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                </tr>
                              </thead>';
                                echo '<tbody>';
                                foreach ($autos as $auto) {
                                    echo "<tr>
                                    <td>{$auto->getPatente()}</td>
                                    <td>{$auto->getMarca()}</td>
                                    <td>{$auto->getModelo()}</td>
                                  </tr>";
                                }
                                echo '</tbody>';
                                echo '</table>';
                            } else {
                                echo "<p>No se encontraron autos asociados a esta persona.</p>";
                            }
                        } else {
                            echo "<p>No se encontró ninguna persona con ese DNI.</p>";
                        }
                        ?>
                        <a class="btn btn-warning" href="autosPersona.php">Volver</a>

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
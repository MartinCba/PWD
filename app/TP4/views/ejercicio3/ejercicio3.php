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
    include_once("../../models/connector/BaseDatos.php");
    include_once "../../models/Persona.php";
    include_once "../../models/Auto.php";
    include_once "../../controllers/PersonaAbm.php";
    include_once "../../controllers/AutoAbm.php";
    $autoAbm = new AutoAbm();
    $parametros = null;
    $arrayAutos = $autoAbm->buscar($parametros);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 48rem;">
            <div class="card-header">
                <h3>Ver Autos</h3>
                <?php
                if (is_array($arrayAutos) && count($arrayAutos) > 0) {
                    echo "<table class='table table-striped'>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Dueño</th>
                    </tr>";
                    foreach ($arrayAutos as $auto) {
                        $persona = $auto->getPersona();
                        echo "<tr>";
                        echo "<td>" . $auto->getPatente() . "</td>";
                        echo "<td>" . $auto->getMarca() . "</td>";
                        echo "<td>" . $auto->getModelo() . "</td>";
                        echo "<td>" . $persona->getApellido() . " " . $persona->getNombre() . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No hay ningun auto cargado...</p>";
                }
                ?>

            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 3
    Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
    mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
    En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
    autos cargados.
-->
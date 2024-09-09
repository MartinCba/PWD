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
    $param = null;

    $arregloAutos = $autoAbm->buscar($param);
    ?>
    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Ver Autos</h3>
                <?php
                if (is_array($arregloAutos) && count($arregloAutos) > 0) {
                    echo "<div style='display: flex; justify-content: space-around;'><table>
            <tr>
                <th style='color: yellow;'>Patente</th>
                <th style='color: yellow;'>Marca</th>
                <th style='color: yellow;'>Modelo</th>
                <th style='color: yellow;'>Dueño</th>
            </tr>";
                    foreach ($arregloAutos as $auto) {
                        $persona = $auto->getPersona();

                        echo "<tr>
                <td>{$auto->getPatente()}</td>
                <td>{$auto->getMarca()}</td>
                <td>{$auto->getModelo()}</td>
                <td>{$persona->getNombre()} {$persona->getApellido()}</td>
            </tr>";
                    }
                    echo "</table></div>";
                } else {
                    echo "<p>No hay autos cargados en la base de datos.</p>";
                }
                ?>

            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/jquery1.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 2
    Crear la capa de control, que nos permitan acceder al ORM  
    (Modelo de datos) y entregarle la informacion a las paginas de la interface.
-->
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
    
    $personaAbm = new PersonaAbm();
    // Obtener el listado de personas
    $personas = $personaAbm->buscar(null);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 68rem;">
            <div class="card-header">
                <h3>Lista de personas</h3>
                <a href="autosPersona.php" style="text-decoration: none; color: yellow;">Autos</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nro DNI</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Teléfono</th>
                            <th>Domicilio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($personas)) {
                            foreach ($personas as $persona) {
                                echo "<tr>";
                                echo "<td>" . $persona->getNroDni() . "</td>";
                                echo "<td>" . $persona->getApellido() . "</td>";
                                echo "<td>" . $persona->getNombre() . "</td>";
                                echo "<td>" . $persona->getFechaNac() . "</td>";
                                echo "<td>" . $persona->getTelefono() . "</td>";
                                echo "<td>" . $persona->getDomicilio() . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No hay personas cargadas</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/jquery5.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 5
    Crear una página "listaPersonas.php" que muestre un listado con las personas que se
    encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
    los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
    generada, no se puede acceder directamente a las clases del ORM.
-->
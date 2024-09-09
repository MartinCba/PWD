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
    ?>
    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Ejercicio 1</h3>
                <p>
                    Crear la capa de los datos, implementando el ORM (Modelo de datos) <br> para la base de datos<br>
                    entregada. Recordar que se debe generar al menos,<br> un clase php por cada tabla. Cada clase debe contener<br>
                    las variables de instancia y sus metodos get y set;<br> ademas de los metodos que nos permitan seleccionar,<br>
                    ingresar, modificar y eliminar los datos de cada tabla

                </p>
            </div>
            <div class="card-body" style="display: flex; justify-content: space-around;">
                <a href="https://github.com/MartinCba/PWD/blob/main/app/TP4/models/Auto.php" style="text-decoration: none; color: yellow;">Auto.php</a>
                <a href="https://github.com/MartinCba/PWD/blob/main/app/TP4/models/Persona.php" style="text-decoration: none; color: yellow;">Persona.php</a>
            </div>
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
    tp4 ejercicio 1
    Crear la capa de los datos, implementando el ORM (Modelo de datos) para la base de datos
    entregada. Recordar que se debe generar al menos, un clase php por cada tabla. Cada clase debe contener
    las variables de instancia y sus metodos get y set; ademas de los metodos que nos permitan seleccionar,
    ingresar, modificar y eliminar los datos de cada tabla. 
-->
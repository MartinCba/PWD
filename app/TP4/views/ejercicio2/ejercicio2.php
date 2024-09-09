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
                <p style="text-align: left;">
                    Crear la capa de control, que nos permitan acceder al ORM
                    (Modelo de datos) y entregarle la informacion a las paginas de la interface.
                </p>
            </div>
            <div class="card-body" style="display: flex; justify-content: space-around;">
                <a href="https://github.com/MartinCba/PWD/blob/main/app/TP4/controllers/AutoAbm.php" style="text-decoration: none; color: yellow;">AutoAbm.php</a>
                <a href="https://github.com/MartinCba/PWD/blob/main/app/TP4/controllers/PersonaAbm.php" style="text-decoration: none; color: yellow;">PersonaAbm.php</a>
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
    tp4 ejercicio 2
    Crear la capa de control, que nos permitan acceder al ORM  
    (Modelo de datos) y entregarle la informacion a las paginas de la interface.
-->
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
                <h3>Ejercicio 3</h3>
                <p>Ingresá tus datos personales:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio3" method="post" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá tu nombre.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá tu apellido.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="edad" id="edad" placeholder="Edad..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá tu edad.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá tu Dirección.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once("../assets/structure/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/jquery3.js"></script>
</body>

</html>
<!-- 
    tp2 ejercicio 3 validar con jQuery
    Crear una página php que contenga un formulario HTML, enviar estos datos por el método Post a otra página php
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias
-->
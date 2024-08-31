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
                <h3>Ejercicio 6</h3>
                <p>Completá el formulario:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio6" method="get" action="action.php" class="needs-validation" novalidate>
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
                        <p>Seleccioná el deporte que practiques:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deportes[]" id="futbol" value="futbol">
                            <label class="form-check-label" for="futbol">
                                Fútbol
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deportes[]" id="basket" value="basket">
                            <label class="form-check-label" for="basket">
                                Básquet
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deportes[]" id="tennis" value="tennis">
                            <label class="form-check-label" for="tennis">
                                Tenis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deportes[]" id="voley" value="voley">
                            <label class="form-check-label" for="voley">
                                Vóley
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            Por favor, seleccioná al menos un deporte.
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
    <script src="../assets/js/jquery6.js"></script>
</body>

</html>
<!-- 
    tp2 ejercicio 6 validar con jquery
    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
    deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
    que procesa el formulario la cantidad de deportes que practica.
-->
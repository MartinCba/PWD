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
                <h3>Ejercicio 2</h3>
                <p>Ingresá las horas de cursada diarias de la materia Programación Web Dinámica</p>
            </div>
            <div class="card-body">
                <form name="ejercicio2" method="get" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="lunes" id="lunes" placeholder="Lunes..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número valido de hs.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="martes" id="martes" placeholder="Martes..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número valido de hs.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="miercoles" id="miercoles" placeholder="Miércoles..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número valido de hs.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="jueves" id="jueves" placeholder="Jueves..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número valido de hs.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" min=0 name="viernes" id="viernes" placeholder="Viernes..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número valido de hs.
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
    <script src="../assets/js/validateMultiple.js"></script>
</body>

</html>

<!-- 
    tp1 ejercicio 2
    Crear una página php que contenga un formulario HTML que permita ingresar las horas
    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
    Enviar los datos del formulario por el método Get a otra página php que los reciba y
    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
    se cursan por semana.
-->
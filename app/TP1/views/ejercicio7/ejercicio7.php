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
                <h3>Ejercicio 7</h3>
                <p>Seleccioná 2 números:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio7" method="get" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="num1" id="num1" placeholder="Número 1..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá un número.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="num2" id="num2" placeholder="Número 2..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá un número.
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Seleccioná la operación:</p>
                        <select class="form-select" id="operacion" name="operacion" aria-label="Default select example">
                            <option value="suma" selected>Sumar</option>
                            <option value="resta">Restar</option>
                            <option value="multi">Multiplicar</option>
                            <option value="div">Dividir</option>
                        </select>
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
    <script src="../assets/js/validate7.js"></script>
</body>

</html>
<!-- 
    tp1 ejercicio 7
    Crear una página con un formulario que contenga dos input de tipo text y un select. En
    los inputs se ingresarán números y el select debe dar la opción de una operación
    matemática que podrá resolverse usando los números ingresados. En la página que
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
    uno de los operandos y el resultado obtenido de resolver la operación.
-->
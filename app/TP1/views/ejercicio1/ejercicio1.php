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
                <p>Verificar si el numero ingresado es 0, positivo o negativo.</p>
            </div>
            <div class="card-body">
                <form name="ejercicio1" method="post" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="numero" id="numero" placeholder="Ingresa un número..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresa un número.
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
    <script src="../assets/js/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
<!-- 
    tp1 ejercicio 1
    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
    respuesta, que permita volver a la página anterior.
-->
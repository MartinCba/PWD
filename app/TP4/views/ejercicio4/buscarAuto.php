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
    
    $autoAbm = new AutoAbm();
    $parametros = null;
    $arrayAutos = $autoAbm->buscar($parametros);
    ?>

    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-center bg-dark text-light" style="width: 28rem;">
            <div class="card-header">
                <h3>Buscar Autos</h3>
                <p>Ingrese la patente:</p>
            </div>
            <div class="card-body">
                <form name="ejercicio4" method="post" action="action.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="text" pattern="[A-Z]{3}\s[0-9]{3}" class="form-control" name="Patente" id="Patente"
                            placeholder="Ej: AAA 000" required>
                        <div class="invalid-feedback">
                            Ingrese una patente valida! 3 Letras Mayusculas, un espacio y 3 numeros.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </div>
        <?php
        include_once("../assets/structure/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/jquery4.js"></script>
</body>

</html>

<!-- 
    tp4 ejercicio 4
    Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
    de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
    usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
    la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
    convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
    Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
    generada, no se puede acceder directamente a las clases del ORM.
-->
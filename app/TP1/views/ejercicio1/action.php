<?php
include_once("../assets/structure.php");
include_once("../../controllers/ValorNumero.php");

$num = $_POST["numero"];
$obj = new ValorNumero($num);
$valor = $obj->validarNumero($num);
?>

<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 1</h3>
        </div>
        <div class="card-body">
            <form name="ejercicio1" method="post" action="action.php">
                <div class="mb-3">
                    <p><?php echo $valor ?></p>
                </div>
                <a class="btn btn-warning" href="ejercicio1.php">Volver</a>
            </form>
        </div>
    </div>
</div>
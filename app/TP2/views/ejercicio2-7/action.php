<?php
include_once("../assets/structure.php");
include_once("../../controllers/calculador.php");

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operacion = $_GET["operacion"];


$obj = new Calculador();
$valor = $obj->calcular($num1, $num2, $operacion);
?>

<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 7</h3>
        </div>
        <div class="card-body">
            <form name="ejercicio1" method="post" action="action.php">
                <div class="mb-3">
                    <p><?php echo $valor ?></p>
                </div>
                <a class="btn btn-warning" href="ejercicio7.php">Volver</a>
            </form>
        </div>
    </div>
</div>
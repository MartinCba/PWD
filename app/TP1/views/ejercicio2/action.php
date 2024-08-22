<?php
include_once("../assets/structure.php");
include_once("../../controllers/ContadorHoras.php");

$lun = $_GET["lunes"];
$mar = $_GET["martes"];
$mie = $_GET["miercoles"];
$jue = $_GET["jueves"];
$vie = $_GET["viernes"];
$obj = new ContadorHoras();
$valor = $obj->sumarHoras($lun, $mar, $mie, $jue, $vie);
?>

<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 2</h3>
        </div>
        <div class="card-body">
            <form name="ejercicio1" method="post" action="action.php">
                <div class="mb-3">
                    <p><?php echo $valor ?></p>
                </div>
                <a class="btn btn-warning" href="ejercicio2.php">Volver</a>
            </form>
        </div>
    </div>
</div>
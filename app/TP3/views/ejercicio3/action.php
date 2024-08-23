<?php
include_once("../assets/structure.php");
include_once("../../controllers/MostrarPeliculas.php");

$titulo = $_POST["titulo"];
$actores = $_POST["actores"];
$director = $_POST["director"];
$guion = $_POST["guion"];
$produccion = $_POST["produccion"];
$anio = $_POST["anio"];
$nacionalidad = $_POST["nacionalidad"];
$genero = $_POST["genero"];
$duracion = $_POST["duracion"];
$edad = $_POST["edad"];
$sinopsis = $_POST["sinopsis"];
$nombre = strtolower($_FILES['archivo']['name']);
$tamanio = $_FILES['archivo']["size"];
$dir = "../../files";





$obj = new MostrarPeliculas();
$msj = $obj->mensaje();
$valor = $obj->mostrarCartelera($nombre, $titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad, $sinopsis);
$valor2 = $obj->analizar($nombre);
?>

<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-start bg-dark text-light" style="width: 48rem;">
        <div class="card-header">
            <h3 class="text-warning">Cinem@s</h3>
        </div>
        <div class="card-body">
            <form name="ejercicio1" method="post" action="action.php">
                <div class="mb-3">
                    <p><?php echo $msj ?></p>
                    <p><?php echo $valor ?></p>
                </div>
                <a class="btn btn-warning" href="ejercicio3.php">Volver</a>
            </form>
        </div>
    </div>
</div>
<?php
include_once("../assets/structure.php");
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery6.js"></script>
<!-- 
    tp2 ejercicio 6 validar con jquery
    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
    deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
    que procesa el formulario la cantidad de deportes que practica.
-->
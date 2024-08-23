<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 8</h3>
            <p>Ingresá los datos para calcular el valor de tus entradas:</p>
        </div>
        <div class="card-body">
            <form name="ejercicio8" method="get" action="action.php" class="needs-validation" novalidate>
                <div class="mb-3">
                    <input type="number" class="form-control" min=0 name="edad" id="edad" placeholder="Edad..." required>
                    <div class="invalid-feedback">
                        Por favor, ingresá tu edad.
                    </div>
                </div>
                <div class="mb-3">
                    <p>Indicá si eres estudiante:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudia" id="estudia1" value="si">
                        <label class="form-check-label" for="estudia1">
                            Estudiante
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudia" id="estudia2" value="no">
                        <label class="form-check-label" for="estudia2">
                            No estudiante
                        </label>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery8.js"></script>
<!-- 
    tp2 ejercicio 8 validar con jquery
    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
    Agregar un botón para limpiar el formulario y volver a consultar.
-->
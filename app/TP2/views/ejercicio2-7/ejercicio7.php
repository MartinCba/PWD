<?php
include_once("../assets/structure.php");
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery7.js"></script>
<!-- 
    tp2 ejercicio 7 validar con jquery
    Crear una página con un formulario que contenga dos input de tipo text y un select. En
    los inputs se ingresarán números y el select debe dar la opción de una operación
    matemática que podrá resolverse usando los números ingresados. En la página que
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
    uno de los operandos y el resultado obtenido de resolver la operación.
-->
<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 4</h3>
            <p>Ingresá tus datos personales:</p>
        </div>
        <div class="card-body">
            <form name="ejercicio4" method="get" action="action.php" class="needs-validation" novalidate>
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
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/validate4.js"></script>
<!-- 
    tp1 ejercicio 4
    Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
    Enviar los datos usando el método GET y luego probar de modificar los datos
    directamente en la url para ver los dos posibles mensajes.
-->
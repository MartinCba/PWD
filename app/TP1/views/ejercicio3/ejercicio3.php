<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 3</h3>
            <p>Ingresá tus datos personales:</p>
        </div>
        <div class="card-body">
            <form name="ejercicio3" method="post" action="action.php" class="needs-validation" novalidate>
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
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección..." required>
                    <div class="invalid-feedback">
                        Por favor, ingresá tu Dirección.
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/validateEj3.js"></script>
<!-- 
    tp1 ejercicio 3
    Crear una página php que contenga un formulario HTML, enviar estos datos por el método Post a otra página php
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias
-->
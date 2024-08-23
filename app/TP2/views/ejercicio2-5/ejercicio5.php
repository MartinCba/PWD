<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 5</h3>
            <p>Completá el formulario:</p>
        </div>
        <div class="card-body">
            <form name="ejercicio5" method="get" action="action.php" class="needs-validation" novalidate>
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
                    <p>Indicá tu nivel de estudios:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudios" id="estudios1" value="no tiene">
                        <label class="form-check-label" for="estudios1">
                            No tiene estudios
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudios" id="estudios2" value="primarios">
                        <label class="form-check-label" for="estudios2">
                            Estudios primarios
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudios" id="estudios3" value="secundarios">
                        <label class="form-check-label" for="estudios3">
                            Estudios secundarios
                        </label>
                    </div>
                    <div class="invalid-feedback">
                        Por favor, seleccioná tu nivel de estudios y sexo.
                    </div>
                    <br />
                    <p>Indicá tu sexo:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="masculino">
                        <label class="form-check-label" for="sexo1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="femenino">
                        <label class="form-check-label" for="sexo2">
                            Femenino
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery5.js"></script>
<!-- 
    tp2 ejercicio 5 validar con jquery
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
    un mensaje que indique el tipo de estudios que posee y su sexo.
-->
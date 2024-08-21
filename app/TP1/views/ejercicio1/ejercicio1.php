<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 1</h3>
            <p>Verificar si el numero ingresado es 0, positivo o negativo.</p>
        </div>
        <div class="card-body">
            <form name="ejercicio1" method="post" action="action.php">
                <div class="mb-3">
                    <input type="number" class="form-control" name="numero" id="numero" placeholder="Ingresa un número..." required>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>


<!-- 
    tp1 ejercicio 1
    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
    respuesta, que permita volver a la página anterior.
-->
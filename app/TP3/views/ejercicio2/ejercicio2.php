<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 2</h3>
            <p>Subí un archivo .txt para visualizarlo</p>
        </div>
        <div class="card-body">
            <form method="post" action="action.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" class="form-control" name="archivo" id="archivo" required>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>


<!-- 
    tp3 ejercicio 2
    Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
    que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
    contenido en un textarea.

-->
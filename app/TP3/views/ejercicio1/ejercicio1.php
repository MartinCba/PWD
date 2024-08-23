<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 1</h3>
            <p>Subí un archivo .doc o .pdf para visualizarlo</p>
        </div>
        <div class="card-body">
            <form method="post" action="action.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" class="form-control" name="archivo" id="archivo" required>
                    <div class="invalid-feedback">
                        Por favor, cargá el archivo .doc o .pdf.
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery1.js"></script>

<!-- 
    tp3 ejercicio 1
    Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
    controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
    máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
    cargado, en caso contrario mostrar un mensaje indicando el problema. 

-->
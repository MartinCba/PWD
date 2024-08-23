<?php
include_once("../assets/structure.php");
?>
<div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
    <div class="card text-center bg-dark text-light" style="width: 28rem;">
        <div class="card-header">
            <h3>Ejercicio 3</h3>
            <p>Member Login:</p>
        </div>
        <div class="card-body">
            <form name="ejercicio3" method="post" action="action.php" class="needs-validation" novalidate>
                <div class="mb-3">
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username..." required>
                    <div class="invalid-feedback">
                        Por favor, ingresá tu nombre de usuario.
                    </div>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password..." required>
                    <div class="invalid-feedback">
                        Por favor, ingresá tu contraseña.
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Login</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jqueryE3.js"></script>
<!-- 
    tp2 ejercicio 3 
    Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
    y la password para loguearse. Los datos del formulario son enviados a un script
    verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
    arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
    de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
    y en caso contrario un mensaje de error. 
-->
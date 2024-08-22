document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  var form = document.querySelector('form[name="ejercicio7"]');

  form.addEventListener("submit", function (event) {
    var isValid = true;

    // Validación de los números
    var num1 = document.getElementById("num1");
    var num2 = document.getElementById("num2");
    var operacion = document.getElementById("operacion").value;

    var num1Value = parseFloat(num1.value);
    var num2Value = parseFloat(num2.value);

    if (isNaN(num1Value) || num1Value === "") {
      isValid = false;
      num1.classList.add("is-invalid");
    } else {
      num1.classList.remove("is-invalid");
    }

    if (isNaN(num2Value) || num2Value === "") {
      isValid = false;
      num2.classList.add("is-invalid");
    } else {
      num2.classList.remove("is-invalid");
    }

    // Validación de operación
    if (operacion === "div" && num2Value === 0) {
      isValid = false;
      num2.classList.add("is-invalid");
      alert("No se puede dividir por cero."); // Muestra un mensaje de alerta
    } else {
      num2.classList.remove("is-invalid");
    }

    // Si algún campo es inválido, evita el envío del formulario
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }

    // Añade la clase `was-validated` para la apariencia general del formulario
    form.classList.add("was-validated");
  });
});

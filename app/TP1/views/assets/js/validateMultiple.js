document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  // Selecciona el formulario específico por su nombre
  var form = document.querySelector('form[name="ejercicio2"]');

  // Añade un evento al enviar el formulario
  form.addEventListener(
    "submit",
    function (event) {
      var inputs = form.querySelectorAll('input[type="number"]');

      // Bandera para verificar si el formulario es válido
      var isValid = true;

      inputs.forEach(function (input) {
        var value = parseFloat(input.value);

        // Verifica si el campo está vacío o si el valor es negativo
        if (isNaN(value) || value < 0) {
          isValid = false;
          input.classList.add("is-invalid"); // Marca el campo como inválido
        } else {
          input.classList.remove("is-invalid"); // Elimina la marca si el campo es válido
        }
      });

      // Si algún campo es inválido, evita el envío del formulario
      if (!isValid) {
        event.preventDefault();
        event.stopPropagation();
      }

      // Añade la clase `was-validated` para la apariencia general del formulario
      form.classList.add("was-validated");
    },
    false
  );
});

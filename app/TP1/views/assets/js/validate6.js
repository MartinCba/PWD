document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  // Selecciona el formulario específico por su nombre
  var form = document.querySelector('form[name="ejercicio6"]');

  form.addEventListener(
    "submit",
    function (event) {
      var isValid = true;

      // Validación de campos de texto
      var textInputs = form.querySelectorAll('input[type="text"]');
      textInputs.forEach(function (input) {
        if (!input.value.trim()) {
          isValid = false;
          input.classList.add("is-invalid"); // Marca el campo como inválido
        } else {
          input.classList.remove("is-invalid"); // Elimina la marca si el campo es válido
        }
      });

      // Validación de campos numéricos
      var numberInputs = form.querySelectorAll('input[type="number"]');
      numberInputs.forEach(function (input) {
        var value = parseFloat(input.value);

        if (isNaN(value) || value < 0) {
          isValid = false;
          input.classList.add("is-invalid"); // Marca el campo como inválido
        } else {
          input.classList.remove("is-invalid"); // Elimina la marca si el campo es válido
        }
      });

      // Validación de selección de deportes
      var sportsInputs = form.querySelectorAll('input[name="deportes[]"]');
      var isSportSelected = Array.from(sportsInputs).some(function (input) {
        return input.checked;
      });

      if (!isSportSelected) {
        isValid = false;
        sportsInputs.forEach(function (input) {
          input.classList.add("is-invalid"); // Marca los campos como inválidos
        });
        alert("Por favor, seleccioná al menos un deporte."); // Muestra un mensaje de alerta
      } else {
        sportsInputs.forEach(function (input) {
          input.classList.remove("is-invalid"); // Elimina la marca si el campo es válido
        });
      }

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

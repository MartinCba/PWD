document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  // Selecciona el formulario específico por su nombre
  var form = document.querySelector('form[name="ejercicio5"]');

  // Añade un evento al enviar el formulario
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

      // Validación de campos radio
      var radioGroups = ["estudios", "sexo"];
      radioGroups.forEach(function (groupName) {
        var radioButtons = form.querySelectorAll(`input[name="${groupName}"]`);
        var isChecked = Array.from(radioButtons).some((radio) => radio.checked);
        var invalidFeedback = radioButtons[0]
          .closest(".mb-3")
          .querySelector(".invalid-feedback");

        if (!isChecked) {
          isValid = false;
          invalidFeedback.style.display = "block"; // Muestra el mensaje de error
          radioButtons.forEach(function (radio) {
            radio.classList.add("is-invalid"); // Marca el grupo como inválido
          });
        } else {
          invalidFeedback.style.display = "none"; // Oculta el mensaje de error
          radioButtons.forEach(function (radio) {
            radio.classList.remove("is-invalid"); // Elimina la marca si el grupo es válido
          });
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

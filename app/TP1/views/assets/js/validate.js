document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  // Selecciona el formulario por su nombre
  var form = document.querySelector('form[name="ejercicio1"]');

  // Añade un evento al enviar el formulario
  form.addEventListener(
    "submit",
    function (event) {
      var numeroInput = document.getElementById("numero");

      // Si el campo está vacío, es un string vacío o NaN
      if (!numeroInput.value || isNaN(numeroInput.value)) {
        // Previene el envío del formulario
        event.preventDefault();
        event.stopPropagation();

        // Añade la clase `is-invalid` para mostrar el mensaje de error
        numeroInput.classList.add("is-invalid");
      } else {
        // Elimina la clase `is-invalid` si hay un valor correcto
        numeroInput.classList.remove("is-invalid");
      }

      // Añade la clase `was-validated` para la apariencia general del formulario
      form.classList.add("was-validated");
    },
    false
  );
});

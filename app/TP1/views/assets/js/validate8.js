document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  var form = document.querySelector('form[name="ejercicio8"]');

  form.addEventListener("submit", function (event) {
    var isValid = true;

    // Validación del campo de edad
    var edad = document.getElementById("edad");
    var edadValue = parseFloat(edad.value);

    if (isNaN(edadValue) || edadValue <= 0) {
      isValid = false;
      edad.classList.add("is-invalid");
    } else {
      edad.classList.remove("is-invalid");
    }

    // Validación del campo de radio "estudia"
    var estudiaRadios = document.querySelectorAll('input[name="estudia"]');
    var estudiaChecked = Array.from(estudiaRadios).some(
      (radio) => radio.checked
    );

    if (!estudiaChecked) {
      isValid = false;
      estudiaRadios.forEach((radio) => radio.classList.add("is-invalid"));
    } else {
      estudiaRadios.forEach((radio) => radio.classList.remove("is-invalid"));
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

$(document).ready(function () {
  // Al enviar el formulario
  $('form[name="ejercicio8"]').on("submit", function (event) {
    let isValid = true;

    // Validar el campo de edad
    let edad = $("#edad").val().trim();
    if (edad === "" || parseInt(edad) <= 0) {
      isValid = false;
      $("#edad").addClass("is-invalid");
    } else {
      $("#edad").removeClass("is-invalid");
      $("#edad").addClass("is-valid");
    }

    // Validar el campo de estudiante
    let estudia = $('input[name="estudia"]:checked').val();
    if (!estudia) {
      isValid = false;
      $('input[name="estudia"]').parent().addClass("is-invalid");
    } else {
      $('input[name="estudia"]').parent().removeClass("is-invalid");
    }

    // Si algún campo no es válido, prevenir el envío
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

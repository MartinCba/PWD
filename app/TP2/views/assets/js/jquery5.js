$(document).ready(function () {
  // Al enviar el formulario
  $('form[name="ejercicio5"]').on("submit", function (event) {
    let isValid = true;

    // Validar campos de texto (nombre, apellido)
    $("#nombre, #apellido").each(function () {
      let valor = $(this).val().trim();
      if (valor === "") {
        isValid = false;
        $(this).addClass("is-invalid");
      } else {
        $(this).removeClass("is-invalid");
        $(this).addClass("is-valid");
      }
    });

    // Validar el campo de edad
    let edad = $("#edad").val();
    if (edad === "" || edad < 0) {
      isValid = false;
      $("#edad").addClass("is-invalid");
    } else {
      $("#edad").removeClass("is-invalid");
      $("#edad").addClass("is-valid");
    }

    // Validar nivel de estudios
    if (!$('input[name="estudios"]:checked').val()) {
      isValid = false;
      $(".form-check").last().next(".invalid-feedback").show();
    } else {
      $(".form-check").last().next(".invalid-feedback").hide();
    }

    // Validar sexo
    if (!$('input[name="sexo"]:checked').val()) {
      isValid = false;
      $(".form-check").last().next(".invalid-feedback").show();
    } else {
      $(".form-check").last().next(".invalid-feedback").hide();
    }

    // Si algún campo no es válido, prevenir el envío
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

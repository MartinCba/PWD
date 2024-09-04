$(document).ready(function () {
  // Al enviar el formulario
  $('form[name="ejercicio6"]').on("submit", function (event) {
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


    // Si algún campo no es válido, prevenir el envío
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

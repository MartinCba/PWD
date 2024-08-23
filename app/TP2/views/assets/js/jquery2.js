$(document).ready(function () {
  // Al enviar el formulario
  $('form[name="ejercicio2"]').on("submit", function (event) {
    let isValid = true;

    // Validar cada día de la semana
    $("#lunes, #martes, #miercoles, #jueves, #viernes").each(function () {
      let valor = $(this).val();
      if (valor === "" || valor < 0) {
        isValid = false;
        $(this).addClass("is-invalid");
      } else {
        $(this).removeClass("is-invalid");
        $(this).addClass("is-valid");
      }
    });

    // Si alguno de los campos no es válido, prevenir el envío
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

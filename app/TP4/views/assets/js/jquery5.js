$(document).ready(function () {
  $("form").on("submit", function (event) {
    // Obtener el valor del campo DNI
    var dni = $("#NroDni").val();

    // Validar que el campo no esté vacío y tenga 8 dígitos
    var isValid = /^[0-9]{8}$/.test(dni);

    if (!isValid) {
      // Si la validación falla, mostrar un mensaje de error y prevenir el envío del formulario
      $("#NroDni").addClass("is-invalid");
      event.preventDefault(); // Prevenir el envío del formulario
    } else {
      // Si es válido, quitar el mensaje de error
      $("#NroDni").removeClass("is-invalid");
    }
  });

  // Agregar validación en tiempo real
  $("#NroDni").on("input", function () {
    var dni = $(this).val();
    var isValid = /^[0-9]{8}$/.test(dni);
    if (isValid) {
      $(this).removeClass("is-invalid");
    } else {
      $(this).addClass("is-invalid");
    }
  });
});

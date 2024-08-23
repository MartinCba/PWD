$(document).ready(function () {
  // Al enviar el formulario
  $('form[name="ejercicio7"]').on("submit", function (event) {
    let isValid = true;

    // Validar los campos de números
    $("#num1, #num2").each(function () {
      let valor = $(this).val().trim();
      if (valor === "") {
        isValid = false;
        $(this).addClass("is-invalid");
      } else {
        $(this).removeClass("is-invalid");
        $(this).addClass("is-valid");
      }
    });

    // Validar el campo de operación
    let num1 = parseFloat($("#num1").val());
    let num2 = parseFloat($("#num2").val());
    let operacion = $("#operacion").val();

    // Comprobar si se seleccionó una operación y validar división por cero
    if (isNaN(num1) || isNaN(num2)) {
      isValid = false;
      $("#num1, #num2").addClass("is-invalid");
    } else {
      $("#num1, #num2").removeClass("is-invalid");
      $("#num1, #num2").addClass("is-valid");
    }

    if (operacion === "div" && num2 === 0) {
      isValid = false;
      $("#num2").addClass("is-invalid");
      alert("No se puede dividir por cero.");
    } else {
      $("#num2").removeClass("is-invalid");
    }

    // Si algún campo no es válido, prevenir el envío
    if (!isValid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

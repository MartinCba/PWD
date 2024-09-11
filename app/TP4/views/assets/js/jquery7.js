$(document).ready(function () {
  $("form[name='ejercicio7']").on("submit", function (event) {
    var form = $(this);

    // Verificar si el formulario es válido
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.addClass("was-validated");
  });

  // Validación personalizada para asegurar que los campos cumplan con el patrón
  $("input").on("input", function () {
    var input = $(this);
    var pattern = input.attr("pattern");
    var value = input.val();

    if (pattern && value !== "") {
      var regex = new RegExp(pattern);
      if (!regex.test(value)) {
        input[0].setCustomValidity("Invalid");
      } else {
        input[0].setCustomValidity("");
      }
    }
  });
});

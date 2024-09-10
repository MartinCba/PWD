$(document).ready(function () {
  $("form[name='ejercicio4']").on("submit", function (event) {
    var patente = $("#Patente").val();
    var patenteRegex = /^[A-Z]{3}\s[0-9]{3}$/;

    if (!patente || !patenteRegex.test(patente)) {
      $("#Patente").addClass("is-invalid");
      event.preventDefault(); // Evita que el formulario se envíe
    } else {
      $("#Patente").removeClass("is-invalid");
    }
  });

  $("#Patente").on("input", function () {
    var patente = $(this).val();
    var patenteRegex = /^[A-Z]{3}\s[0-9]{3}$/;

    if (patenteRegex.test(patente)) {
      $(this).removeClass("is-invalid");
    } else {
      $(this).addClass("is-invalid");
    }
  });
});

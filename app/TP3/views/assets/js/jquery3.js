$(document).ready(function () {
  $("form[name='ejercicio4']").on("submit", function (event) {
    let isValid = true;

    // Validar todos los campos obligatorios (input, select, textarea)
    $(this)
      .find("input[required], select[required], textarea[required]")
      .each(function () {
        if ($(this).val() === "") {
          $(this).addClass("is-invalid");
          isValid = false;
        } else {
          $(this).removeClass("is-invalid");
        }
      });

    // Validar campo de Año
    let anio = $("#anio").val();
    if (anio.length !== 4 || isNaN(anio) || anio < 1900) {
      $("#anio").addClass("is-invalid");
      isValid = false;
    } else {
      $("#anio").removeClass("is-invalid");
    }

    // Validar campo de Duración
    let duracion = $("#duracion").val();
    if (duracion.length === 0 || duracion.length > 3 || isNaN(duracion)) {
      $("#duracion").addClass("is-invalid");
      isValid = false;
    } else {
      $("#duracion").removeClass("is-invalid");
    }

    // Validar Restricción de edad (radio buttons)
    if (!$('input[name="edad"]:checked').val()) {
      $('input[name="edad"]')
        .closest(".form-check-inline")
        .addClass("is-invalid");
      isValid = false;
    } else {
      $('input[name="edad"]')
        .closest(".form-check-inline")
        .removeClass("is-invalid");
    }

    // Validar archivo de imagen (solo jpg y png)
    let archivo = $("#archivo").val();
    let extension = archivo.substring(archivo.lastIndexOf(".")).toLowerCase();
    if (extension !== ".jpg" && extension !== ".png") {
      $("#archivo").addClass("is-invalid");
      isValid = false;
      alert("Solo se permiten archivos con extensión .jpg o .png");
    } else {
      $("#archivo").removeClass("is-invalid");
    }

    if (!isValid) {
      event.preventDefault();
    }
  });

  // Limpiar el formulario
  $(".btn-danger").on("click", function () {
    $('form[name="ejercicio4"]').trigger("reset");
    $("input, textarea, select").removeClass("is-invalid");
    $('input[name="edad"]')
      .closest(".form-check-inline")
      .removeClass("is-invalid");
  });
});

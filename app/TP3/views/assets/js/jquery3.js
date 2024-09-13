$(document).ready(function () {
  // Guardar el placeholder original
  $("input[required], select[required], textarea[required]").each(function () {
    $(this).data("original-placeholder", $(this).attr("placeholder"));
  });

  $("form[name='ejercicio4']").on("submit", function (event) {
    let isValid = true;

    // Validar todos los campos obligatorios (input, select, textarea)
    $(this)
      .find("input[required], select[required], textarea[required]")
      .each(function () {
        if ($(this).val() === "") {
          $(this).addClass("is-invalid");
          $(this).attr(
            "placeholder",
            "Por favor, ingresá " + $(this).attr("name")
          );
          isValid = false;
        } else {
          $(this).removeClass("is-invalid");
          $(this).attr("placeholder", $(this).data("original-placeholder"));
        }
      });

    // Validar campo de Año
    let anio = $("#anio").val();
    if (anio.length !== 4 || isNaN(anio) || anio < 1900) {
      $("#anio").addClass("is-invalid");
      $("#anio").attr("placeholder", "Ingresá un año válido");
      isValid = false;
    } else {
      $("#anio").removeClass("is-invalid");
      $("#anio").attr("placeholder", $("#anio").data("original-placeholder"));
    }

    // Validar campo de Duración
    let duracion = $("#duracion").val();
    if (
      duracion.length === 0 ||
      duracion.length > 3 ||
      isNaN(duracion) ||
      duracion < 0
    ) {
      $("#duracion").addClass("is-invalid");
      $("#duracion").attr("placeholder", "Ingresá una duración válida");
      isValid = false;
    } else {
      $("#duracion").removeClass("is-invalid");
      $("#duracion").attr(
        "placeholder",
        $("#duracion").data("original-placeholder")
      );
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
      $("#archivo").attr("placeholder", "Ingresá un archivo .jpg o .png");
      isValid = false;
    } else {
      $("#archivo").removeClass("is-invalid");
      $("#archivo").attr(
        "placeholder",
        $("#archivo").data("original-placeholder")
      );
    }

    if (!isValid) {
      event.preventDefault();
    }
  });

  // Limpiar el formulario y remover mensajes de error
  $(".btn-danger").on("click", function () {
    $('form[name="ejercicio4"]').trigger("reset");
    $("input, textarea, select").removeClass("is-invalid");
    $(".form-check-inline").removeClass("is-invalid");
    $(".invalid-feedback").hide(); // Ocultar mensajes de invalid-feedback

    // Restaurar los placeholders originales
    $("input[required], select[required], textarea[required]").each(
      function () {
        $(this).attr("placeholder", $(this).data("original-placeholder"));
      }
    );
  });
});

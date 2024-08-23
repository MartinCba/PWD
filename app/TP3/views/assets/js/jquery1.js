$(document).ready(function () {
  $("form").on("submit", function (event) {
    let isValid = true;
    let fileInput = $("#archivo")[0];
    let filePath = fileInput.value;
    let allowedExtensions = /(\.doc|\.pdf)$/i;
    let maxSize = 2 * 1024 * 1024; // 2MB en bytes

    // Validar que se haya seleccionado un archivo
    if (filePath === "") {
      $("#archivo").addClass("is-invalid");
      isValid = false;
    } else {
      $("#archivo").removeClass("is-invalid");

      // Validar extensión del archivo
      if (!allowedExtensions.exec(filePath)) {
        $("#archivo").addClass("is-invalid");
        $("#archivo")
          .next(".invalid-feedback")
          .text("Solo se permiten archivos .doc o .pdf.");
        isValid = false;
      } else {
        $("#archivo").removeClass("is-invalid");

        // Validar tamaño del archivo
        if (fileInput.files[0].size > maxSize) {
          $("#archivo").addClass("is-invalid");
          $("#archivo")
            .next(".invalid-feedback")
            .text("El archivo no puede pesar más de 2 MB.");
          isValid = false;
        } else {
          $("#archivo").removeClass("is-invalid");
        }
      }
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});

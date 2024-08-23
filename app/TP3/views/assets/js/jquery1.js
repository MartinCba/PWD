$(document).ready(function () {
  $("form").on("submit", function (event) {
    let isValid = true;
    let fileInput = $("#archivo");
    let filePath = fileInput.val();
    let allowedExtensions = /(\.doc|\.pdf)$/i;

    // Validar que se haya seleccionado un archivo
    if (filePath === "") {
      fileInput.addClass("is-invalid");
      isValid = false;
    } else {
      fileInput.removeClass("is-invalid");

      // Validar extensión del archivo
      if (!allowedExtensions.exec(filePath)) {
        fileInput.addClass("is-invalid");
        fileInput
          .next(".invalid-feedback")
          .text("Solo se permiten archivos .doc o .pdf.");
        isValid = false;
      } else {
        fileInput.removeClass("is-invalid");
      }
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});

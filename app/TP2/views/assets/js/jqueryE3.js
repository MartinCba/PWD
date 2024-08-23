$(document).ready(function () {
  $("#loginForm").on("submit", function (event) {
    // Evitar el envío del formulario
    event.preventDefault();

    // Limpiar mensajes de error previos
    $(".invalid-feedback").hide();
    let valid = true;

    // Obtener valores de los campos
    let username = $("#usuario").val().trim();
    let password = $("#password").val().trim();

    // Validar usuario
    if (username === "") {
      $("#usuario").siblings(".invalid-feedback").show();
      valid = false;
    }

    // Validar contraseña
    if (password === "") {
      $("#password").siblings(".invalid-feedback").eq(0).show();
      valid = false;
    } else if (password.length < 8) {
      $("#passwordError")
        .text("La contraseña debe tener al menos 8 caracteres.")
        .show();
      valid = false;
    } else if (!/[a-zA-Z]/.test(password) || !/[0-9]/.test(password)) {
      $("#passwordError")
        .text("La contraseña debe contener letras y números.")
        .show();
      valid = false;
    } else if (password === username) {
      $("#passwordError")
        .text("La contraseña no puede ser igual al nombre de usuario.")
        .show();
      valid = false;
    }

    // Si todo es válido, enviar el formulario
    if (valid) {
      this.submit();
    }
  });
});

$(document).ready(function () {
  $("#loginForm").on("submit", function (event) {
    // Inicializar variable para control de validación
    let valid = true;

    // Limpiar mensajes de error previos
    $(".invalid-feedback").hide();

    // Obtener valores de los campos
    let username = $("#usuario").val().trim();
    let password = $("#password").val().trim();

    // Validar usuario
    if (username === "") {
      $("#usuario").next(".invalid-feedback").text("Por favor, ingresá tu nombre de usuario.").show();
      valid = false;
    }

    // Validar contraseña
    if (password === "") {
      $("#password").next(".invalid-feedback").text("Por favor, ingresá tu contraseña.").show();
      valid = false;
    } else if (password.length < 8) {
      $("#password").next(".invalid-feedback").text("La contraseña debe tener al menos 8 caracteres.").show();
      valid = false;
    } else if (!/[a-zA-Z]/.test(password) || !/[0-9]/.test(password)) {
      $("#password").next(".invalid-feedback").text("La contraseña debe contener letras y números.").show();
      valid = false;
    } else if (password === username) {
      $("#password").next(".invalid-feedback").text("La contraseña no puede ser igual al nombre de usuario.").show();
      valid = false;
    }

    // Si el formulario no es válido, evitar el envío
    if (!valid) {
      event.preventDefault();
    } else {
      // Eliminar preventDefault y permitir el envío solo si es válido
      return true;
    }
  });
});

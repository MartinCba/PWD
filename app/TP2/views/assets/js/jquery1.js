$(document).ready(function() {
  // Al enviar el formulario
  $('form[name="ejercicio1"]').on('submit', function(event) {
      let isValid = true;

      // Obtener el valor del campo de entrada
      let numero = $('#numero').val();

      // Verificar si el campo está vacío
      if (numero === "") {
          isValid = false;
          $('#numero').addClass('is-invalid');
      } else {
          $('#numero').removeClass('is-invalid');
          $('#numero').addClass('is-valid');
      }

      // Si el formulario no es válido, prevenir el envío
      if (!isValid) {
          event.preventDefault();
          event.stopPropagation();
      }
  });
});

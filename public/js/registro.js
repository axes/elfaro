$(document).ready(function () {

    console.log('El DOM ha sido cargado');

    // Manejo del formulario de registro
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "index.php?page=registerUser",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                console.log("Registro:", response);  // Depuración: registra la respuesta
                if (response.success) {
                    $('#message').text(response.message);
                    window.location.href = 'index.php?page=login';  // Redirigir a la página de login
                } else {
                    $('#message').text(response.message || "Error desconocido");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error en la respuesta AJAX: " + error);
                console.log(xhr.responseText);
                $('#message').text("Error procesando el registro.");
            }
        });
    });

    // Manejo del formulario de login
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "index.php?page=loginUser",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    $('#loginMessage').text(response.message);
                    window.location.href = 'index.php?page=home';
                } else {
                    $('#loginMessage').text(response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error en la respuesta AJAX: " + error);
                $('#loginMessage').text("Error procesando el login. Detalles: " + xhr.responseText);
            }
        });
    });
});

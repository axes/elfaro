document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevenir el envío real del formulario

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    alert(`Se ha enviado el siguiente mensaje a los editores de El Faro:\nNombre: ${name}\nEmail: ${email}\nMensaje: ${message}`);

    // Aquí puedes limpiar el formulario si lo deseas
    this.reset();
});
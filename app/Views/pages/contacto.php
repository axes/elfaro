<!-- contacto.php -->
<div class="container">
    <h2>Contacto</h2>
    <form id="contactForm">
        <div class="form-group mb-3">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" required>
        </div>
        <div class="form-group mb-3">
            <label for="message">Mensaje:</label>
            <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aquí" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    <?php if (isset($_SESSION['username'])): ?>
        document.getElementById('name').value = "<?= htmlspecialchars($_SESSION['username']); ?>";
    <?php endif; ?>

    var form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();  // Prevenir el envío real del formulario

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            alert(`Se ha enviado el siguiente mensaje a los editores de El Faro:\nNombre: ${name}\nEmail: ${email}\nMensaje: ${message}`);
            this.reset();  // Opcional: limpiar el formulario después de mostrar la alerta
        });
    } else {
        console.error('Formulario no encontrado');
    }
});
</script>
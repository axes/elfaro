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
            <label for="type">Tipo:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="sin asunto">Sin asunto</option>
                <option value="quejas o reclamos">Quejas o Reclamos</option>
                <option value="carta al director">Carta al Director</option>
            </select>
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
            var type = document.getElementById('type').value;
            var message = document.getElementById('message').value;

            // Realizar la solicitud AJAX
            fetch('index.php?page=contacto', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&type=${encodeURIComponent(type)}&message=${encodeURIComponent(message)}`,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    form.reset();  // Opcional: limpiar el formulario después de enviar
                } else {
                    alert('Error al enviar el mensaje.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al enviar el mensaje.');
            });
        });
    } else {
        console.error('Formulario no encontrado');
    }
});
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="my-5">Registrarse</h2>
            <form id="registrationForm">
                <div class="form-group mb-3">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <div id="message"></div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL; ?>/js/registro.js"></script>
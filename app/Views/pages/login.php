<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="my-5">Iniciar Sesión</h2>
            <form id="loginForm" method="POST">
                <div class="form-group mb-3">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <div id="loginMessage"></div>
                <?php var_dump(BASE_URL);?>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>/js/registro.js"></script>

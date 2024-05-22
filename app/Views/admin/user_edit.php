<!-- /app/Views/admin/user_edit.php -->
<h2>Editar Usuario</h2>
<form method="POST">
    <div class="form-group">
        <label for="username">Nombre de usuario:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    <div class="form-group">
        <label for="role">Rol:</label>
        <select class="form-control" id="role" name="role" required>
            <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="editor" <?= $user['role'] === 'editor' ? 'selected' : '' ?>>Editor</option>
            <option value="subscriber" <?= $user['role'] === 'subscriber' ? 'selected' : '' ?>>Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="password">Nueva contraseña (dejar en blanco para mantener la actual):</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

<h2>Gestionar Usuarios</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de usuario</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= htmlspecialchars($user['id_user']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['role']) ?></td>
                <td>
                    <a href="<?= BASE_URL ?>/index.php?page=admin&action=editUser&id=<?= $user['id_user'] ?>" class="btn btn-warning">Editar</a>
                    <a href="<?= BASE_URL ?>/index.php?page=admin&action=deleteUser&id=<?= $user['id_user'] ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

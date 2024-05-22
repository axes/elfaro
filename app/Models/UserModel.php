<?php

class UserModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Obtener todos los usuarios
    public function getAllUsers()
    {
        $sql = "SELECT id_user, username, email, role FROM user";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Obtenr todos los datos de usuario
    // public function getUsers()
    // {
    //     $stmt = $this->pdo->query('SELECT * FROM User');
    //     return $stmt->fetchAll();
    // }

    // Obtener usuario por nombre de usuario (sirve para login)
    public function getUserByUsername($username)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }

    // Obtener usuario por ID
    public function getUserById($id)
    {
        $sql = "SELECT id_user, username, email, role FROM user WHERE id_user = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    // Actualizar usuario
    public function updateUser($id, $username, $email, $role, $password = null)
    {
        $sql = "UPDATE user SET username = :username, email = :email, role = :role";
        if ($password) {
            $sql .= ", password = :password";
        }
        $sql .= " WHERE id_user = :id";

        $stmt = $this->pdo->prepare($sql);
        $params = [
            ':username' => $username,
            ':email' => $email,
            ':role' => $role,
            ':id' => $id
        ];

        if ($password) {
            $params[':password'] = password_hash($password, PASSWORD_BCRYPT);
        }

        $stmt->execute($params);
    }


    public function addUser($username, $password, $email)
    {
        $stmt = $this->pdo->prepare('INSERT INTO user (username, password, email, registerDate, role) VALUES (:username, :password, :email, NOW(), "subscriber")');
        $stmt->execute([
            'username' => $username,
            'password' => $password,
            'email' => $email,
        ]);
    }

    // Eliminar usuario
    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id_user = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
    }






    public function validateUser($username, $password)
    {
        $user = $this->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}

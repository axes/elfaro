<?php

class UserModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
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

    public function getUsers()
    {
        $stmt = $this->pdo->query('SELECT * FROM User');
        return $stmt->fetchAll();
    }

    // Obtener usuario por nombre de usuario (sirve para login)
    public function getUserByUsername($username)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
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

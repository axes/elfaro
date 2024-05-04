<?php

class User
{
    // Donde almacenaremos los usuarios
    private $users = [];
    
    // Algunos usuarios de ejemplo al instanciar la clase
    public function __construct() {
        $this->users = [
            ['username' => 'gino', 'password' => 'gino123'], 
            ['username' => 'jorge', 'password' => 'jorge123'],
            ['username' => 'bastian', 'password' => 'bastian123'],
        ];
    }

    public function addUser($username, $password) {
        $newUser = [
            'username' => $username,
            'password' => $password 
        ];
        $this->users[] = $newUser;
    }

    public function getUsers() {
        return $this->users;
    }
}

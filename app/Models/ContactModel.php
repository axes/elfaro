<?php

class ContactModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createContact($name, $email, $message, $type)
    {
        $sql = "INSERT INTO contactos (name, email, message, type) VALUES (:name, :email, :message, :type)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'type' => $type,
        ]);
    }

    public function getAllContacts()
    {
        $sql = "SELECT * FROM contactos ORDER BY date_sent DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function deleteContact($id)
    {
        $sql = "DELETE FROM contactos WHERE id_contacto = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}

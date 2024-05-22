<?php

require_once ROOT_PATH . '/app/Models/ContactModel.php';

class ContactController
{
    private $contactModel;

    public function __construct($pdo)
    {
        $this->contactModel = new ContactModel($pdo);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $type = $_POST['type'];

            $this->contactModel->createContact($name, $email, $message, $type);
            echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente.']);
            exit();
        }
        include ROOT_PATH . '/app/Views/pages/contacto.php';
    }

    public function index()
    {
        $contacts = $this->contactModel->getAllContacts();
        include ROOT_PATH . '/app/Views/admin/contactos_index.php';
    }

    public function delete($id)
    {
        $this->contactModel->deleteContact($id);
        header('Location: ' . BASE_URL . '/index.php?page=admin&action=manageContacts');
        exit();
    }
}

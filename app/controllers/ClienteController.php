<?php

require_once dirname(__DIR__, 2) . '/config/database.php';
require_once dirname(__DIR__) . '/models/Cliente.php';

class ClienteController {
    private $db;
    private $cliente;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->cliente = new Cliente($this->db);
    }

    public function index() {
        $stmt = $this->cliente->read();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require dirname(__DIR__) . '/views/clientes/index.php';
    }

    public function store() {
        if ($_POST) {
            $this->cliente->nome = $_POST['nome'];
            $this->cliente->email = $_POST['email'];
            $this->cliente->telefone = $_POST['telefone'];
            $this->cliente->estado = $_POST['estado'];

            if($this->cliente->create()) {
                header('Location: /');
            }
        }
    }

    public function update() {
        if ($_POST) {
            $this->cliente->id = $_POST['id'];
            $this->cliente->nome = $_POST['nome'];
            $this->cliente->email = $_POST['email'];
            $this->cliente->telefone = $_POST['telefone'];
            $this->cliente->estado = $_POST['estado'];

            if($this->cliente->update()) {
                header('Location: /');
            }
        }
    }

    public function delete() {
        if ($_POST) {
            $this->cliente->id = $_POST['id'];

            if($this->cliente->delete()) {
                header('Location: /');
            }
        }
    }
}
?>

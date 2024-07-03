<?php

require dirname(__DIR__) . '/config/database.php';
require dirname(__DIR__) . '/app/controllers/ClienteController.php';

$controller = new ClienteController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'create') {
        $controller->store();
    } elseif (isset($_POST['action']) && $_POST['action'] === 'update') {
        $controller->update();
    } elseif (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $controller->delete();
    }
} else {
    $controller->index();
}
?>

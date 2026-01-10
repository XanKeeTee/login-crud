<?php
session_start();

include_once 'controllers/AlumnoController.php';
include_once 'controllers/LoginController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Protección de sesión
if (!isset($_SESSION['user_id']) && $action != 'login') {
    header("Location: index.php?action=login");
    exit();
}

switch ($action) {
    case 'login':
        $controller = new LoginController();
        $controller->login();
        break;
    case 'logout':
        $controller = new LoginController();
        $controller->logout();
        break;
    case 'create':
        $controller = new AlumnoController();
        $controller->create();
        break;
    case 'edit':
        $controller = new AlumnoController();
        $controller->edit();
        break;
    case 'delete':
        $controller = new AlumnoController();
        $controller->delete();
        break;
    case 'index':
    default:
        $controller = new AlumnoController();
        $controller->index();
        break;
}
?>
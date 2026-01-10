<?php
include_once 'config/Database.php';
include_once 'models/Usuario.php';

class LoginController {
    
    public function login() {
        if (isset($_SESSION['user_id'])) {
            header("Location: index.php?action=index");
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $database = new Database();
            $db = $database->getConnection();
            $user = new Usuario($db);

            $user->username = $_POST['username'];
            $user->password = $_POST['password'];

            if ($user->login()) {

                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                header("Location: index.php?action=index");
                exit();
            } else {
                $error = "Usuario o contraseña incorrectos.";
                include 'views/login.php';
            }
        } else {
            include 'views/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }
}
?>
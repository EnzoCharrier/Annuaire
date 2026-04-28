<?php
require_once __DIR__ . '/../Models/UserModel.php';

class AuthController {
    private $_model;

    public function __construct() {
        $this->_model = new UserModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
            $password = $_POST['mdp'];
            $url = trim($_POST['url']);
            
            if (!$mail) {
                return ['titre' => 'Inscription', 'error' => 'Email invalide'];
            }
            if (empty($password)) {
                return ['titre' => 'Inscription', 'error' => 'Le mot de passe est requis'];
            }
            
            
            if ($this->_model->insert($mail, $password, $url, null)) {
                header('Location: index.php?page=auth&action=login');
                exit;
            } else {
                return ['titre' => 'Inscription', 'error' => 'Erreur lors de l\'inscription. Cet email existe peut-être déjà.'];
            }
        }
        return ['titre' => 'Inscription'];
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
            $password = $_POST['mdp'];
            $user = $this->_model->findByEmail($mail);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: index.php?page=site&action=list');
                exit;
            }
            return ['titre' => 'Connexion', 'error' => 'Identifiants incorrects'];
        }
        return ['titre' => 'Connexion'];
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?page=Accueil&action=list');
        exit;
    }
}
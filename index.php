<?php
session_start();

// Si pas connecté et pas sur login/register, rediriger
if (empty($_SESSION['user'])) {
    $page = $_GET['page'];
    $action = $_GET['action'];
    
    // Pages autorisées sans authentification
    $publicPages = ['auth', 'site'];
    $publicActions = [
        'auth' => ['login', 'register', 'logout'],
        'site' => ['search']
    ];
    
    $isPublic = false;
    if (isset($publicPages) && in_array($page, $publicPages)) {
        if (!isset($publicActions[$page]) || in_array($action, $publicActions[$page])) {
            $isPublic = true;
        }
    }
    
    if (!$isPublic) {
        header('Location: index.php?page=auth&action=login');
        exit;
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    $prefix = 'Smarty\\';
    $base_dir = __DIR__ . '/libs/smarty/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

$smarty = new \Smarty\Smarty();

//todo gérer le coeur de l'appli en POO
//Chargement du moteur de template Smarty

$smarty->setTemplateDir('Views/templates/');
$smarty->setCompileDir('Views/templates_c/');
$smarty->setConfigDir('Views/configs/');
$smarty->setCacheDir('Views/cache/');

// Passer la session à Smarty pour utiliser dans les templates
$smarty->assign('smarty', ['session' => $_SESSION]);

// Routeur (gestion des routes)
$page = isset($_GET['page']) ? $_GET['page'] : 'auth';
$pages = array('categorie' => 'CategoryController',
               'analyse' => 'AnalyseController',
               'Accueil' => 'HomeController',
               '' => 'AuthController',
               'auth' => 'AuthController',
               'site' => 'SiteController'

);
$action = (isset($_GET['action'])) ? $_GET['action'] : 'login';
/**
 * Exemple d'utilisation index.php?page=categorie&action=list
 */
if (array_key_exists($page, $pages)) {
    require("Controllers/" . $pages[$page] . ".php");
    $ctrl = new $pages[$page]();
    
    if (method_exists($ctrl, $action)) {
        // chargement du chemin de la vue dans une variable Smarty
        $smarty->assign('tpl', $page . '/' . $action . '.tpl');
        // Chargement du tableau associative des controlleurs pour ma vue.
        $smarty->assign('vue', $ctrl->{$action}());
        $smarty->display('index.tpl');
    } else {
        http_response_code(404);
        //todo: 404
    }
} else {
    //todo:404
    http_response_code(404);
}
 
<?php
require_once __DIR__ . '/../Models/SiteModel.php';
require_once __DIR__ . '/../Models/CategoryModel.php';

class SiteController {
    private $_model;
    private $_categoryModel;

    public function __construct() {
        $this->_model = new SiteModel();
        $this->_categoryModel = new CategoryModel();
    }

    public function add() {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?page=auth&action=login');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->_model->insert(
                (int)$_SESSION['user']['idUser'],
                trim($_POST['url']),
                trim($_POST['titre']),
                trim($_POST['descriptions']),
                (int)$_POST['idCategorie']
            );
            header('Location: index.php?page=site&action=list');
            exit;
        }
        return ['titre' => 'Ajouter un site', 'categories' => $this->_categoryModel->list()];
    }

    public function list() {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?page=auth&action=login');
            exit;
        }
        return ['titre' => 'Mes sites', 'sites' => $this->_model->listByUser((int)$_SESSION['user']['idUser'])];
    }

    public function search() {
        $keyword = trim($_GET['q']);
        $categoryId = (int)($_GET['idCategorie']);
        return [
            'titre' => 'Recherche de sites',
            'results' => $this->_model->search($keyword, $categoryId),
            'categories' => $this->_categoryModel->list(),
            'q' => $keyword,
            'selectedCategory' => $categoryId
        ];
    }

    public function update() {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?page=auth&action=login');
            exit;
        }
        
        $idSite = (int)($_GET['idSite']);
        if ($idSite <= 0) {
            header('Location: index.php?page=site&action=list');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $site = $this->_model->selectById($idSite);
            if (!$site || $site['idUser'] != $_SESSION['user']['idUser']) {
                header('Location: index.php?page=site&action=list');
                exit;
            }
            return [
                'titre' => 'Modifier un site',
                'site' => $site,
                'categories' => $this->_categoryModel->list()
            ];
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $site = $this->_model->selectById($idSite);
            if (!$site || $site['idUser'] != $_SESSION['user']['idUser']) {
                header('Location: index.php?page=site&action=list');
                exit;
            }
            
            $this->_model->update(
                $idSite,
                trim($_POST['url']),
                trim($_POST['titre']),
                trim($_POST['descriptions']),
                (int)$_POST['idCategorie']
            );
            header('Location: index.php?page=site&action=list');
            exit;
        }
    }

    public function delete() {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?page=auth&action=login');
            exit;
        }
        
        $idSite = (int)($_GET['idSite'] ?? 0);
        if ($idSite <= 0) {
            header('Location: index.php?page=site&action=list');
            exit;
        }

        $site = $this->_model->selectById($idSite);
        if ($site && $site['idUser'] == $_SESSION['user']['idUser']) {
            $this->_model->delete($idSite);
        }
        
        header('Location: index.php?page=site&action=list');
        exit;
    }
}
<?php

require_once __DIR__ . '/../Models/CategoryModel.php';

/**
 * Description of CategoryController
 *
 * @author Kevin
 */
class CategoryController {

    private $_model;

    /**
     * Instancie notre model
     */
    public function __construct() {
        $this->_model = new CategoryModel();
    }

    /**
     * Retourne un tableau associatif
     * @return Array
     */
    public function list() {
        return ["titre" => "Listing des catégories",
            "description" => "Liste des categories",
            "categories" => $this->_model->list()
        ];
    }

    public function add() {
        return ["titre" => "Ajout des catégories",
            "description" => "Ajout des categories"
        ];
    }

    public function delete() {
        if (!isset($_GET['idCategorie']) || empty($_GET['idCategorie'])) {
            header("location: index.php?page=categorie&action=list");
            exit;
        }
        $id = filter_var($_GET['idCategorie'], FILTER_VALIDATE_INT);
        if ($id !== false && $id > 0) {
            $this->_model->delete($id);
        }
        header("location: index.php?page=categorie&action=list");
        exit;
    }


    public function insert() {
        if (isset($_POST['libelle'])) {
            $libelle = filter_var($_POST['libelle'], FILTER_SANITIZE_STRING);
            $this->_model->insert($libelle);
            header("location: index.php?page=categorie&action=list");
            exit;
        } else {
            header("location: index.php?page=categorie&action=add");
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (!isset($_GET['idCategorie']) || empty($_GET['idCategorie'])) {
                header("location: index.php?page=categorie&action=list");
                exit;
            }
            return [
                "titre" => "Ajout des catégories",
                "description" => "Ajout des catégories",
                "categorie" => $this->_model->selectById((int)$_GET['idCategorie'])
            ];
        }
        elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $libelle = $_POST['libelle'];
            $id = filter_var($_POST['idCategorie'], FILTER_VALIDATE_INT);
            $this->_model->update($id, $libelle);
            header("location: index.php?page=categorie&action=list");
            exit;
        }
    }

}

<?php
require_once __DIR__ . '/../core/Model.php';

class SiteModel extends Model {
    public function __construct() {
        parent::__construct();
        $this->_table = 'Site';
    }

    public function insert(int $idUser, string $url, string $titre, string $descriptions, int $idCategorie) {
        $sth = $this->_pdo->prepare(
            "INSERT INTO {$this->_table} (idUser, url, titre, descriptions, idCategorie)
             VALUES(:idUser, :url, :titre, :descriptions, :idCategorie)"
        );
        $sth->bindParam(':idUser', $idUser);
        $sth->bindParam(':url', $url);
        $sth->bindParam(':titre', $titre);
        $sth->bindParam(':descriptions', $descriptions);
        $sth->bindParam(':idCategorie', $idCategorie);
        return $sth->execute();
    }

    public function listByUser(int $idUser) {
        $sth = $this->_pdo->prepare(
            "SELECT Site.*, c.libelle AS category_libelle 
             FROM {$this->_table} Site
             LEFT JOIN Categorie c ON Site.idCategorie = c.idCategorie
             WHERE Site.idUser = :idUser"
        );
        $sth->bindParam(':idUser', $idUser);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search(string $keyword = '', int $categoryId = 0) {
        $sql = "SELECT Site.*, c.libelle AS category
                FROM {$this->_table} Site
                LEFT JOIN Categorie c ON Site.idCategorie = c.idCategorie
                WHERE 1=1";
        $params = [];
        if ($keyword !== '') {
            $sql .= " AND (Site.titre LIKE :kw OR Site.descriptions LIKE :kw OR Site.url LIKE :kw)";
            $params[':kw'] = "%{$keyword}%";
        }
        if ($categoryId > 0) {
            $sql .= " AND Site.idCategorie = :categoryId";
            $params[':categoryId'] = $categoryId;
        }
        $sth = $this->_pdo->prepare($sql);
        foreach ($params as $key => $value) {
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectById(int $idSite) {
        $sth = $this->_pdo->prepare("SELECT * FROM {$this->_table} WHERE idSite = :idSite");
        $sth->bindParam(':idSite', $idSite, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function update(int $idSite, string $url, string $titre, string $descriptions, int $idCategorie) {
        $sth = $this->_pdo->prepare(
            "UPDATE {$this->_table} 
             SET url = :url, titre = :titre, descriptions = :descriptions, idCategorie = :idCategorie
             WHERE idSite = :idSite"
        );
        $sth->bindParam(':idSite', $idSite, PDO::PARAM_INT);
        $sth->bindParam(':url', $url);
        $sth->bindParam(':titre', $titre);
        $sth->bindParam(':descriptions', $descriptions);
        $sth->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);
        return $sth->execute();
    }

    public function delete(int $idSite) {
        $sth = $this->_pdo->prepare("DELETE FROM {$this->_table} WHERE idSite = :idSite");
        $sth->bindParam(':idSite', $idSite, PDO::PARAM_INT);
        return $sth->execute();
    }
}
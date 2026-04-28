<?php
require_once __DIR__ . '/../core/Model.php';

class UserModel extends Model {
    public function __construct() {
        parent::__construct();
        $this->_table = 'Utilisateur';
    }

    public function insert(string $mail, string $password, string $url, ?string $params = null) {
        $sth = $this->_pdo->prepare(
            "INSERT INTO {$this->_table} (mail, mdp, url, params)
             VALUES(:mail, :mdp, :url, :params)"
        );
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':mdp', $password);
        $sth->bindParam(':url', $url);
        $sth->bindParam(':params', $params);
        return $sth->execute();
    }

    public function findByEmail(string $mail) {
        $sth = $this->_pdo->prepare("SELECT * FROM {$this->_table} WHERE mail = :mail");
        $sth->bindParam(':mail', $mail);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}
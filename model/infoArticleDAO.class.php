<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/infoArticle.class.php'));

// Data Access Object pour InfoArticle
class InfoArticleDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    function getDernierNumArticle() : int {
        $dao = new InfoArticleDAO(); // instancie l'objet DAO
        $req = 'SELECT max(numArticle) FROM InfoArticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return intval($resArray[0][0]);
    }

}

?>
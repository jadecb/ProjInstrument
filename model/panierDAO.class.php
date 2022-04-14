<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/panier.class.php'));

// Data Access Object pour Panier
class PanierDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $this->db = getDAO();
}

    function getAllNumArticle(int $numClient) : array{
        $dao = new PanierDAO;
        $req = 'SELECT numArticle FROM Panier where numClient = '.$numClient;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }

}

?>
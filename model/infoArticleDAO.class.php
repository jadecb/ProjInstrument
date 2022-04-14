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

    // renvoi le dernier numArticle de la base
    function getDernierNumArticle() : int {
        $dao = new InfoArticleDAO(); // instancie l'objet DAO
        $req = 'SELECT max(numArticle) FROM InfoArticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return intval($resArray[0][0]);
    }

    // renvoi un tableau contenant plusieurs tableaux
    // chacun ayant le numArticle, le nom et le prix d'un article ayant $search dans son nom
    function getArticleRecherche(string $search) : array {

        require_once('../model/allArticles.php');
        $dao = new InfoArticleDAO();
        $i = 0;
        while($i < count($allArticles)){
            $req = 'SELECT ia.numArticle, ia.nom, ia.prix FROM '.$allArticles[$i].' i, infoArticle ia WHERE i.numArticle = ia.numArticle AND ia.nom LIKE "%'.$search.'%"';
            $sth = $this->db->query($req);
            $Array = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($Array)){
                $res[] = $Array;
            }
            $i++;
        }
        return $res;
    }

}

?>
<?php

require_once(dirname(__FILE__.'/banjo.class.php'));

// Data Access Object pour Client
class BanjoDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
    function __construct() {
        try {
        $database = 'sqlite:'.dirname(__FILE__).'/../data/Sibemol.db';
        $this->db = new PDO($database, '', '');
        } catch (PDOExeception $e) {
            die("Echec lors de la connexion : ".$e->getMessage());
        }
    }


    // Renvoi un tableau contenant les info du banjo, le tableau est vide si le banjo n'existe pas
    function getBanjo() : array {
        $dao = new BanjoDAO(); // instancie l'objet DAO
        $req = 'SELECT * FROM infoArticle iA, infoInstrument iI, banjo b where iA.numArticle='.$numArticle ;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return intval($resArray);
    }

    // Ajoute un banjo dans la base
    function ajoutBanjo(Banjo $b) : void {
        $dao = new BanjoDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$b->numArticle.',"'.$b->nom.'",'.$b->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$b->numArticle.',"'.$b->materiauxPrincipal.'","'.$b->nom.'",'.$b->largeur.','.$b->longueur.','.$b->hateur.',"'.$b->familleInstrument.'")';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Banjo VALUES ('.$b->numArticle.','.$b->nbrCorde.')';
        $sth = $this->db->exec($req);
    }    


}

?>
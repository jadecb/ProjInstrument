<?php

require_once(dirname(__FILE__.'/harpe.class.php'));

// Data Access Object pour Harpe
class HarpeDAO{
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

    // Renvoi un tableau contenant les info de la Harpe, le tableau est vide si la Harpe n'existe pas
    function getHarpe(int $numArticle) : array{
        $dao = new HarpeDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, h.type, h.nbrCorde FROM infoArticle ia, infoInstrument ii, harpe h WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Harpe dans la base
    function ajoutHarpe (Harpe $a) : void {
        $dao = new HarpeDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Harpe VALUES ('.$a->numArticle.', "'$a->type'", '.$a->nbrCorde.')';
        $sth = $this->db->exec($req);
    }

}

?>
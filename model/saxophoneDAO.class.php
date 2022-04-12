<?php

require_once(dirname(__FILE__.'/saxophone.class.php'));

// Data Access Object pour Saxophone
class SaxophoneDAO{
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

    // Renvoi un tableau contenant les info de la Saxophone, le tableau est vide si la Saxophone n'existe pas
    function getSaxophone(int $numArticle) : array{
        $dao = new SaxophoneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, s.nbrTouche FROM infoArticle ia, infoInstrument ii, saxophone s WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Saxophone dans la base
    function ajoutSaxophone (Saxophone $a) : void {
        $dao = new SaxophoneDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Saxophone VALUES ('.$a->numArticle.', '.$a->nbrTouche.')';
        $sth = $this->db->exec($req);
    }

}

?>
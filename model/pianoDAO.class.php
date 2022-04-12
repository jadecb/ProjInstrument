<?php

require_once(dirname(__FILE__.'/piano.class.php'));

// Data Access Object pour piano
class PianoDAO{
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

    // Renvoi un tableau contenant les info de la piano, le tableau est vide si la piano n'existe pas
    function getPiano(int $numArticle) : array{
        $dao = new PianoDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, p.nbrTouche, p.materiauxTouche FROM infoArticle ia, infoInstrument ii, piano p WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un piano dans la base
    function ajoutPiano(Piano $a) : void {
        $dao = new PianoDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO piano VALUES ('.$a->numArticle.','.$a->nbrTouche.','.$a->materiauxTouche.')';
        $sth = $this->db->exec($req);
    }

}

?>
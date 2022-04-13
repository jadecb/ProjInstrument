<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/piano.class.php'));

// Data Access Object pour piano
class PianoDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la piano, le tableau est vide si la piano n'existe pas
    function getPiano(int $numArticle) : array{
        $dao = new PianoDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, p.nbrTouche, p.materiauxTouche FROM infoArticle ia, infoInstrument ii, piano p where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND p.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Pianos, le tableau est vide si aucun Piano n'existe
    function getAllPiano() : array{
        $dao = new PianoDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrTouche, a.materiauxTouche FROM infoArticle ia, infoInstrument ii, Piano a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_ASSOC);
        return $resArray;
    }
    // Ajout un piano dans la base
    function ajoutPiano(Piano $a) : void {
        $dao = new PianoDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO piano VALUES ('.$a->numArticle.','.$a->nbrTouche.',"'.$a->materiauxTouche.'")';
        $sth = $this->db->exec($req);
    }

}

?>
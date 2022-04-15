<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/trombone.class.php'));

// Data Access Object pour Trombone
class TromboneDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Trombone, le tableau est vide si la Trombone n'existe pas
    function getTrombone(int $numArticle) : array{
        $dao = new TromboneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, t.typeTrombone FROM infoArticle ia, infoInstrument ii, trombone t where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND t.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Trombones, le tableau est vide si aucun Trombone n'existe
    function getAllTrombone() : array{
        $dao = new TromboneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, a.typeTrombone FROM infoArticle ia, infoInstrument ii, Trombone a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un Trombone dans la base
    function ajoutTrombone (Trombone $a) : void {
        $dao = new TromboneDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Trombone VALUES ('.$a->numArticle.', "'.$a->type.'")';
        $sth = $this->db->exec($req);
    }

}

?>
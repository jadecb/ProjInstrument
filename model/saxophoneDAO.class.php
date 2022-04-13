<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/saxophone.class.php'));

// Data Access Object pour Saxophone
class SaxophoneDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Saxophone, le tableau est vide si la Saxophone n'existe pas
    function getSaxophone(int $numArticle) : array{
        $dao = new SaxophoneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, s.nbrTouche FROM infoArticle ia, infoInstrument ii, saxophone s where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND s.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Saxophones, le tableau est vide si aucun Saxophone n'existe
    function getAllSaxophone() : array{
        $dao = new SaxophoneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrTouche FROM infoArticle ia, infoInstrument ii, Saxophone a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un Saxophone dans la base
    function ajoutSaxophone (Saxophone $a) : void {
        $dao = new SaxophoneDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Saxophone VALUES ('.$a->numArticle.', '.$a->nbrTouche.')';
        $sth = $this->db->exec($req);
    }

}

?>
<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/flute.class.php'));

// Data Access Object pour Client
class FluteDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }


    // Renvoi un tableau contenant les info du flute, le tableau est vide si le flute n'existe pas
    function getFlute(int $numArticle) : array {
        $dao = new FluteDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur,b.type, b.nbrTrou  FROM infoArticle ia, infoInstrument ii, flute b where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND b.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les flutes, le tableau est vide si aucun flute n'existe
    function getAllFlute() : array{
        $dao = new FluteDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.type, a.nbrTrou FROM infoArticle ia, infoInstrument ii, flute a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }


    // Ajoute un flute dans la base
    function ajoutFlute(Flute $b) : void {
        var_dump($b);
        $dao = new FluteDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$b->numArticle.',"'.$b->nomArticle.'",'.$b->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$b->numArticle.',"'.$b->materiauxPrincipal.'","'.$b->couleur.'",'.$b->largeur.','.$b->longueur.','.$b->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Flute VALUES ('.$b->numArticle.',"'.$b->type.'",'.$b->nbrTrou.')';
        $sth = $this->db->exec($req);
    }    

}

?>
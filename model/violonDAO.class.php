<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/violon.class.php'));

// Data Access Object pour Violon
class ViolonDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Violon, le tableau est vide si la Violon n'existe pas
    function getViolon(int $numArticle) : array{
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, v.type, v.typeFinition, v.nbrCordes FROM infoArticle ia, infoInstrument ii, violon v where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND v.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Violons, le tableau est vide si aucun Violon n'existe
    function getAllViolon() : array{
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.typeFinition, a.nbrCordes FROM infoArticle ia, infoInstrument ii, Violon a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }

    // Ajout un Violon dans la base
    function ajoutViolon (Violon $a) : void {
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Violon VALUES ('.$a->numArticle.',"'.$a->type.'", "'.$a->typeFinition.'", '.$a->nbrCordes.')';
        $sth = $this->db->exec($req);
    }

}

?>
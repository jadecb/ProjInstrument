<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/guitare.class.php'));

// Data Access Object pour guitare
class GuitareDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la guitare, le tableau est vide si la guitare n'existe pas
    function getGuitare(int $numArticle) : array{
        $dao = new GuitareDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, g.materiauxManche, g.type, g.materiauxBoitier, g.nbrCordes FROM infoArticle ia, infoInstrument ii, guitare g where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND g.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Guitare, le tableau est vide si aucun Guitare n'existe
    function getAllGuitare() : array{
        $dao = new GuitareDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, a.materiauxManche, a.type, a.materiauxBoitier, a.nbrCordes FROM infoArticle ia, infoInstrument ii, Guitare a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un guitare dans la base
    function ajoutGuitare(Guitare $a) : void {
        $dao = new GuitareDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO guitare VALUES ('.$a->numArticle.',"'.$a->materiauxManche.'","'.$a->type.'","'.$a->materiauxBoitier.'",'.$a->nbrCordes.')';
        $sth = $this->db->exec($req);
    }

}

?>
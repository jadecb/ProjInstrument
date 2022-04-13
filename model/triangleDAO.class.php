<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/triangle.class.php'));

// Data Access Object pour Triangle
class TriangleDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Triangle, le tableau est vide si la Triangle n'existe pas
    function getTriangle(int $numArticle) : array{
        $dao = new TriangleDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, t.poids FROM infoArticle ia, infoInstrument ii, triangle t where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND t.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Triangles, le tableau est vide si aucun Triangle n'existe
    function getAllTriangle() : array{
        $dao = new TriangleDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.poids FROM infoArticle ia, infoInstrument ii, Triangle a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }

    // Ajout un Triangle dans la base
    function ajoutTriangle (Triangle $a) : void {
        $dao = new TriangleDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Triangle VALUES ('.$a->numArticle.', '.$a->poids.')';
        $sth = $this->db->exec($req);
    }

}

?>
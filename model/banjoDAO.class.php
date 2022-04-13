<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/banjo.class.php'));

// Data Access Object pour Client
class BanjoDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }


    // Renvoi un tableau contenant les info du banjo, le tableau est vide si le banjo n'existe pas
    function getBanjo(int $numArticle) : array {
        $dao = new BanjoDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, b.nbrCordes  FROM infoArticle ia, infoInstrument ii, banjo b where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND b.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Banjos, le tableau est vide si aucun Banjo n'existe
    function getAllBanjo() : array{
        $dao = new BanjoDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrCordes FROM infoArticle ia, infoInstrument ii, Banjo a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }


    // Ajoute un banjo dans la base
    function ajoutBanjo(Banjo $b) : void {
        var_dump($b);
        $dao = new BanjoDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$b->numArticle.',"'.$b->nomArticle.'",'.$b->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$b->numArticle.',"'.$b->materiauxPrincipal.'","'.$b->couleur.'",'.$b->largeur.','.$b->longueur.','.$b->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Banjo VALUES ('.$b->numArticle.','.$b->nbrCordes.')';
        $sth = $this->db->exec($req);
    }    

}

?>
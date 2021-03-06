<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/luth.class.php'));

// Data Access Object pour luth
class LuthDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la luth, le tableau est vide si la luth n'existe pas
    function getLuth(int $numArticle) : array{
        $dao = new LuthDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, l.nbrCordes FROM infoArticle ia, infoInstrument ii, luth l where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND l.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Luths, le tableau est vide si aucun Luth n'existe
    function getAllLuth() : array{
        $dao = new LuthDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, a.nbrCordes FROM infoArticle ia, infoInstrument ii, Luth a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un luth dans la base
    function ajoutluth(Luth $a) : void {
        $dao = new LuthDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO luth VALUES ('.$a->numArticle.','.$a->nbrCordes.')';
        $sth = $this->db->exec($req);
    }

}

?>
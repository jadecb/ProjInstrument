<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/tuba.class.php'));

// Data Access Object pour Tuba
class TubaDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Tuba, le tableau est vide si la Tuba n'existe pas
    function getTuba(int $numArticle) : array{
        $dao = new TubaDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, t.nbrPiston FROM infoArticle ia, infoInstrument ii, tuba t where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND t.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Tubas, le tableau est vide si aucun Tuba n'existe
    function getAllTuba() : array{
        $dao = new TubaDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, a.nbrPiston FROM infoArticle ia, infoInstrument ii, Tuba a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un Tuba dans la base
    function ajoutTuba (Tuba $a) : void {
        $dao = new TubaDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Tuba VALUES ('.$a->numArticle.','.$a->nbrPiston.')';
        $sth = $this->db->exec($req);
    }

}

?>
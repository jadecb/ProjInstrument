<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/harmonica.class.php'));

// Data Access Object pour Harmonica
class HarmonicaDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Harmonica, le tableau est vide si la Harmonica n'existe pas
    function getHarmonica(int $numArticle) : array{
        $dao = new HarmonicaDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, h.nbrTrou FROM infoArticle ia, infoInstrument ii, harmonica h where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND h.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Harmonicas, le tableau est vide si aucun Harmonica n'existe
    function getAllHarmonica() : array{
        $dao = new HarmonicaDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Harmonica a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_ASSOC);
        return $resArray;
    }
    // Ajout un Harmonica dans la base
    function ajoutHarmonica(Harmonica $a) : void {
        $dao = new HarmonicaDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Harmonica VALUES ('.$a->numArticle.','.$a->nbrTrou.')';
        $sth = $this->db->exec($req);
    }

}

?>
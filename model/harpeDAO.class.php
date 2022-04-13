<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/harpe.class.php'));

// Data Access Object pour Harpe
class HarpeDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Harpe, le tableau est vide si la Harpe n'existe pas
    function getHarpe(int $numArticle) : array{
        $dao = new HarpeDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, h.type, h.nbrCordes FROM infoArticle ia, infoInstrument ii, harpe h where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND h.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Harpe, le tableau est vide si aucun Harpe n'existe
    function getAllHarpe() : array{
        $dao = new HarpeDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Harpe a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_ASSOC);
        return $resArray;
    }
    // Ajout un Harpe dans la base
    function ajoutHarpe (Harpe $a) : void {
        $dao = new HarpeDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Harpe VALUES ('.$a->numArticle.', "'.$a->type.'", '.$a->nbrCordes.')';
        $sth = $this->db->exec($req);
    }

}

?>
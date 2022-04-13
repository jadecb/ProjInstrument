<?php

require_once(dirname(__FILE__.'/trompette.class.php'));

// Data Access Object pour Trompette
class TrompetteDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
            $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Trompette, le tableau est vide si la Trompette n'existe pas
    function getTrompette(int $numArticle) : array{
        $dao = new TrompetteDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, t.nbrTouche FROM infoArticle ia, infoInstrument ii, trompette t where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND t.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Trompettes, le tableau est vide si aucun Trompette n'existe
    function getAllTrompette() : array{
        $dao = new TrompetteDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Trompette a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_ASSOC);
        return $resArray;
    }
    // Ajout un Trompette dans la base
    function ajoutTrompette (Trompette $a) : void {
        $dao = new TrompetteDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$b->numArticle.',"'.$b->materiauxPrincipal.'","'.$b->couleur.'",'.$b->largeur.','.$b->longueur.','.$b->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Trompette VALUES ('.$a->numArticle.','.$a->nbrTouche.')';
        $sth = $this->db->exec($req);
    }

}

?>
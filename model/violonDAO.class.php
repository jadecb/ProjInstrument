<?php

require_once(dirname(__FILE__.'/violon.class.php'));

// Data Access Object pour Violon
class ViolonDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $db->getDAO();
    }

    // Renvoi un tableau contenant les info de la Violon, le tableau est vide si la Violon n'existe pas
    function getViolon(int $numArticle) : array{
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.longueur, ii.hauteur, v.type, v.typeFinition, v.nbrCordes FROM infoArticle ia, infoInstrument ii, violon v where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND v.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }

    // Ajout un Violon dans la base
    function ajoutViolon (Violon $a) : void {
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$b->numArticle.',"'.$b->materiauxPrincipal.'","'.$b->couleur.'",'.$b->largeur.','.$b->longueur.','.$b->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Violon VALUES ('.$a->numArticle.',"'.$a->type.'", "'.$a->typeFinition.'", '.$a->nbrCordes.')';
        $sth = $this->db->exec($req);
    }

}

?>
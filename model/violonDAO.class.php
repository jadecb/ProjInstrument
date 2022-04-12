<?php

require_once(dirname(__FILE__.'/violon.class.php'));

// Data Access Object pour Violon
class ViolonDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
    function __construct() {
        try {
        $database = 'sqlite:'.dirname(__FILE__).'/../data/Sibemol.db';
        $this->db = new PDO($database, '', '');
        } catch (PDOExeception $e) {
            die("Echec lors de la connexion : ".$e->getMessage());
        }
    }

    // Renvoi un tableau contenant les info de la Violon, le tableau est vide si la Violon n'existe pas
    function getViolon(int $numArticle) : array{
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, v.type, v.typeFinition, v.nbrCorde FROM infoArticle ia, infoInstrument ii, violon v WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Violon dans la base
    function ajoutViolon (Violon $a) : void {
        $dao = new ViolonDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Violon VALUES ('.$a->numArticle.',"'.$a->type.'", "'.$a->typeFinition.'", '.$a->nbrCorde.')';
        $sth = $this->db->exec($req);
    }

}

?>
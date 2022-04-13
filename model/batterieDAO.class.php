<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/batterie.class.php'));

// Data Access Object pour Batterie
class BatterieDAO{
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la Batterie, le tableau est vide si la Batterie n'existe pas
    function getBatterie(int $numArticle) : array{
        $dao = new BatterieDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, b.type, b.typePeau FROM infoArticle ia, infoInstrument ii, Batterie b where ia.numArticle='.$numArticle.' AND ii.numArticle='.$numArticle.' AND b.numArticle='.$numArticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les Batterie, le tableau est vide si aucun Batterie n'existe
    function getAllBatterie() : array{
        $dao = new BatterieDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.type, a.typePeau FROM infoArticle ia, infoInstrument ii, Batterie a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }
    // Ajout un Batterie dans la base
    function ajoutBatterie(Batterie $a) : void {
        $dao = new BatterieDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Batterie VALUES ('.$a->numArticle.',"'.$a->type.'","'.$a->typePeau.'")';
        $sth = $this->db->exec($req);
    }

}

?>
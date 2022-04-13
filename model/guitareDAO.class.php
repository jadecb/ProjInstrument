<?php

require_once(dirname(__FILE__.'/guitare.class.php'));

// Data Access Object pour guitare
class GuitareDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
}

    // Renvoi un tableau contenant les info de la guitare, le tableau est vide si la guitare n'existe pas
    function getGuitare(int $numArticle) : array{
        $dao = new GuitareDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, g.materiauxManche, g.type, g.materiauxBoitier, g.nbrCorde FROM infoArticle ia, infoInstrument ii, guitare d WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un guitare dans la base
    function ajoutGuitare(Guitare $a) : void {
        $dao = new GuitareDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO guitare VALUES ('.$a->numArticle.','.$a->materiauxManche.','.$a->type.','.$a->materiauxBoitier.','.$a->nbrCorde.')';
        $sth = $this->db->exec($req);
    }

}

?>
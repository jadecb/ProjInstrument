<?php

require_once(dirname(__FILE__.'/trombone.class.php'));

// Data Access Object pour Trombone
class TromboneDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
}

    // Renvoi un tableau contenant les info de la Trombone, le tableau est vide si la Trombone n'existe pas
    function getTrombone(int $numArticle) : array{
        $dao = new TromboneDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, t.type FROM infoArticle ia, infoInstrument ii, trombone t WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Trombone dans la base
    function ajoutTrombone (Trombone $a) : void {
        $dao = new TromboneDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Trombone VALUES ('.$a->numArticle.', "'.$a->type.'")';
        $sth = $this->db->exec($req);
    }

}

?>
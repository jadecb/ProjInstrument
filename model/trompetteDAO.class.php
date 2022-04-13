<?php

require_once(dirname(__FILE__.'/trompette.class.php'));

// Data Access Object pour Trompette
class TrompetteDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
}

    // Renvoi un tableau contenant les info de la Trompette, le tableau est vide si la Trompette n'existe pas
    function getTrompette(int $numArticle) : array{
        $dao = new TrompetteDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, t.nbrTouche FROM infoArticle ia, infoInstrument ii, trompette t WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Trompette dans la base
    function ajoutTrompette (Trompette $a) : void {
        $dao = new TrompetteDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Trompette VALUES ('.$a->numArticle.', '.$a->nbrTouche.')';
        $sth = $this->db->exec($req);
    }

}

?>
<?php

require_once(dirname(__FILE__.'/harmonica.class.php'));

// Data Access Object pour Harmonica
class HarmonicaDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
}

    // Renvoi un tableau contenant les info de la Harmonica, le tableau est vide si la Harmonica n'existe pas
    function getHarmonica(int $numArticle) : array{
        $dao = new HarmonicaDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, h.nbrTrou FROM infoArticle ia, infoInstrument ii, harmonica h WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un Harmonica dans la base
    function ajoutHarmonica(Harmonica $a) : void {
        $dao = new HarmonicaDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Harmonica VALUES ('.$a->numArticle.','.$a->nbrTrou.')';
        $sth = $this->db->exec($req);
    }

}

?>
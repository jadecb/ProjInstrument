<?php

require_once(dirname(__FILE__.'/accordeon.class.php'));

// Data Access Object pour Accordeon
class AccordeonDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
    }

    // Renvoi un tableau contenant les info de l'accordeon, le tableau est vide si l'accordeon n'existe pas
    function getAccordeon(int $numArticle) : array{
        $dao = new AccordeonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Accordeon WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un accordeon dans la base
    function ajoutAccordeon(Accordeon $a) : void {
        $dao = new AccordeonDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Accordeon VALUES ('.$a->numArticle.','.$a->nbrBouton.')';
        $sth = $this->db->exec($req);
    }

}

?>
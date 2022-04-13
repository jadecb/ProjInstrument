<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/accordeon.class.php'));

// Data Access Object pour Accordeon
class AccordeonDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de l'accordeon, le tableau est vide si l'accordeon n'existe pas
    function getAccordeon(int $numArticle) : array{
        $dao = new AccordeonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Accordeon a WHERE ia.numArticle='.$numarticle.' AND ii.numArticle='.$numArticle.' AND a.numArticle='.$numArticle;;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les accordeons, le tableau est vide si aucun accordeon n'existe
    function getAllAccordeon() : array{
        $dao = new AccordeonDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, a.nbrbouton FROM infoArticle ia, infoInstrument ii, Accordeon a WHERE ia.numArticle=ii.numArticle AND ia.numArticle=a.numarticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }

    // Ajout un accordeon dans la base
    function ajoutAccordeon(Accordeon $a) : void {
        $dao = new AccordeonDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO Accordeon VALUES ('.$a->numArticle.','.$a->nbrBouton.')';
        $sth = $this->db->exec($req);
    }

}

?>
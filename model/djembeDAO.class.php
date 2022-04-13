<?php

require_once(dirname(__FILE__.'/globalDAO.php'));
require_once(dirname(__FILE__.'/djembe.class.php'));

// Data Access Object pour djembe
class DjembeDAO{
    private PDO $db;

  // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de la djembe, le tableau est vide si la djembe n'existe pas
    function getDjembe(int $numArticle) : array{
        $dao = new DjembeDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, d.typePeau FROM infoArticle ia, infoInstrument ii, djembe d WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }

    // Ajout un djembe dans la base
    function ajoutDjembe(Djembe $a) : void {
        $dao = new DjembeDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nomArticle.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO djembe VALUES ('.$a->numArticle.','.$a->typePeau.')';
        $sth = $this->db->exec($req);
    }

}

?>
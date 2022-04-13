<?php

require_once(dirname(__FILE__.'/maracas.class.php'));

// Data Access Object pour maracas
class MaracasDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $db->getDAO();
}

    // Renvoi un tableau contenant les info de la maracas, le tableau est vide si la maracas n'existe pas
    function getMaracas(int $numArticle) : array{
        $dao = new MaracasDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, ii.familleinstrument, ii.materiauxprincipal, ii.couleur, ii.largeur, ii.hauteur, m.typeCalebasse FROM infoArticle ia, infoInstrument ii, maracas m WHERE ia.numArticle='.$numarticle;
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETH_BOTH);
        return $resArray;
    }
    // Ajout un maracas dans la base
    function ajoutMaracas(Maracas $a) : void {
        $dao = new MaracasDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO infoInstrument VALUES ('.$a->numArticle.',"'.$a->familleInstrument.'","'.$a->materiauxPrincipal.'","'.$a->couleur.'",'.$a->largeur.','.$a->longueur.','.$a->hauteur.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO maracas VALUES ('.$a->numArticle.','.$a->typeCalebasse.')';
        $sth = $this->db->exec($req);
    }

}

?>
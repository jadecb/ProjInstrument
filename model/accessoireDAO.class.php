<?php

require_once('globalDAO.php');
require_once(dirname(__FILE__.'/accessoire.class.php'));

// Data Access Object pour Accessoire
class AccessoireDAO{
    private PDO $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
        $this->db = getDAO();
    }

    // Renvoi un tableau contenant les info de l'accessoire, le tableau est vide si l'accessoire n'existe pas
    function getAccessoire(int $numArticle) : array{
        $dao = new AccessoireDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, a.fournisseur, a.materiaux, a.marque, a.typeAcc FROM infoArticle ia, accessoire a WHERE ia.numArticle='.$numArticle.' AND a.numArticle='.$numArticle.'';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return $resArray;
    }
    // Renvoi un tableau contenant les info de tous les accessoires, le tableau est vide si aucun accessoire n'existe
    function getAllAccessoire() : array{
        $dao = new AccessoireDAO(); // instancie l'objet DAO
        $req = 'SELECT ia.numarticle, ia.nom, ia.prix, a.fournisseur, a.materiaux, a.marque, a.typeAcc FROM infoArticle ia, accessoire a WHERE ia.numArticle=a.numArticle';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resArray;
    }

    // Ajout un accessoire dans la base
    function ajoutAccessoire(Accessoire $a) : void {
        $dao = new AccessoireDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO infoArticle VALUES ('.$a->numArticle.',"'.$a->nom.'",'.$a->prix.')';
        $sth = $this->db->exec($req);
        $req = 'INSERT INTO accessoire VALUES ('.$a->numArticle.',"'.$a->fournisseur.'","'.$a->materiau.'","'.$a->marque.'","'.$a->type.'")';
        $sth = $this->db->exec($req);
    }

}

?>
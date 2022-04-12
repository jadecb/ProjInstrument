<?php

require_once(dirname(__FILE__.'/client.class.php'));

// Data Access Object pour Client
class ClientDAO{
    private $db;

  // Constructeur chargé d'ouvrir la BD
    function __construct() {
        try {
        $database = 'sqlite:'.dirname(__FILE__).'/../data/Sibemol.db';
        $this->db = new PDO($database, '', '');
        } catch (PDOExeception $e) {
            die("Echec lors de la connexion : ".$e->getMessage());
        }
    }

    function getDernierNumClient() : int {
        $dao = new ClientDAO(); // instancie l'objet DAO
        $req = 'SELECT max(numClient) FROM client';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return intval($resArray[0][0]);
    }

    // Recherche l'existence d'un mail : true si existe, false sinon
    function mailExists(string $mail) : bool{
        $dao = new ClientDAO(); // instancie l'objet DAO
        $req = 'SELECT mail FROM client WHERE mail="'.$mail.'"';
        $sth = $this->db->query($req);
        $resArray = $sth->fetchAll(PDO::FETCH_BOTH);
        return !empty($resArray);
    }

    // Ajout un client dans la base
    function ajoutClient(Client $c) : void {
        $dao = new ClientDAO(); // instancie l'objet DAO
        $req = 'INSERT INTO Client VALUES ('.$c->numClient.'"'.$c->nom.'","'.$c->prenom.'""'.$c->adresse.'""'.$c->mail.'""'.$c->dateNaissance.'")';
        $sth = $this->db->exec($req);
    }

void createUser(Client client);
}

?>
<?php

// Description d'un client
class Client{
    private int $numClient;
    private string $prenom;
    private string $nom;
    private string $adresse;
    private string $dateNaissance; // format : yyyy/mm/dd
    private string $mail;
    private string $mdp;
    private bool $admin;

    function __construct(int $numClient, string $prenom='', string $nom='',
    string $adresse='', string $dateNaissance='', string $mail='',
    string $mdp=''){
        $this->numClient = $numClient;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->dateNaissance = $dateNaissance;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->admin = false;
    }

    public function __get(string $name){
        if(isset($this->$name) && !empty($this->$name)){
            return $this->$name;
        }
        else{
            return NULL;
        }
    }

}

?>
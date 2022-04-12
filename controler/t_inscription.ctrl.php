<?php

require_once(__DIR__.'/../framework/view.fw.php');
require_once('../model/client.class.php');
require_once('../model/clientDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}

if(isset($_GET['nom'])){
    $nom = $_GET['nom'];
}

if(isset($_GET['adresse'])){
    $adresse = $_GET['adresse'];
}

if(isset($_GET['dateNaissance'])){
    $dateNaissance = $_GET['dateNaissance'];
}

if(isset($_GET['mail'])){
    $mail = $_GET['mail'];
}

if(isset($_GET['mdp'])){
    $mdp = $_GET['mdp'];
}

/* *** PARTIE USAGE DU MODELE *** */

$clientDAO = new ClientDAO();
$client = new Client($clientDAO->getDernierNumClient()+1, $prenom, $nom, $adresse, $dateNaissance, $mail, $mdp);

/* *** GESTION DE LA VUE *** */

$view = new View();

if($clientDAO->mailExists()){
    $view->display('index.view.php');
}
else{
    $clientDAO->ajoutClient($client);
    $view->display('inscription.view.php');
}

?>
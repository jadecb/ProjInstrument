<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once('../model/client.class.php');
require_once('../model/clientDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

// Récupération de la query string
// si mail ou mdp manquant renvoi au controleur precedent

if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['adresse']) && isset($_GET['dateNaissance']) && isset($_GET['mail']) && isset($_GET['mdp'])){
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $adresse = $_GET['adresse'];
    $dateNaissance = $_GET['dateNaissance'];
    $mail = $_GET['mail'];
    $mdp = $_GET['mdp'];
}
else{
    header('Location: inscription.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

//DAO
$clientDAO = new ClientDAO();

// Instanciation d'un objet client
$client = new Client($clientDAO->getDernierNumClient()+1, $prenom, $nom, $adresse, $dateNaissance, $mail, $mdp);

/* *** GESTION DE LA VUE *** */

$view = new View();

// si le mail est déjà dans la base on affiche inscription.view.php
if($clientDAO->mailExists($mail)){
    $mailExistant = "mailExistant";
    $view->assign('mailExistant', $mailExistant);
    $view->display('inscription.view.php');
}
else{ // si le mail n'existe pas dans la base on affiche connect.view.php
    $clientDAO->ajoutClient($client);
    $nouvelementInscrit = "oui";
    $view->assign('nouvelementInscrit', $nouvelementInscrit);
    $view->display('connect.view.php');
}

?>
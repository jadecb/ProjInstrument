<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once('../model/client.class.php');
require_once('../model/clientDAO.class.php');
require_once('../model/allInstruments.php');


/* *** PARTIE RECUPARATION DES DONNEES *** */

// Récupération de la query string
// si mail ou mdp manquant renvoi au controleur precedent
if(isset($_GET['mail']) && isset($_GET['mdp'])){
    $mail = $_GET['mail'];
    $mdp = $_GET['mdp'];
}
else{
    header('Location: connect.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

// DAO
$clientDAO = new ClientDAO();

// Appel à la DAO pour récupérer le client
$infoClient = $clientDAO->getClient($mail, $mdp);

// Si le client existe stockage de ses informations dans $_SESSION
if(!empty($infoClient)){
    foreach($infoClient[0] as $key => $value){
        $_SESSION[$key] = $value;
    }
}

/* *** GESTION DE LA VUE *** */

$view = new View();

if(!empty($infoClient)){
    if(isset($_SESSION['prenom'])){
        $view->assign('prenom',$_SESSION['prenom']);
    }
    
    if(isset($_SESSION['gestionnaire'])&& $_SESSION['gestionnaire']==1){
        $view->assign('gestionnaire',$_SESSION['gestionnaire']);
    }
    $view->assign('allInstruments', $allInstruments);
    $view->display('index.view.php');
}
else{
    $mauvaisId = "mauvaisId";
    $view->assign('mauvaisId', $mauvaisId);
    $view->display('connect.view.php');
}


?>
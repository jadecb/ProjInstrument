<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once('../model/client.class.php');
require_once('../model/clientDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_GET['mail'])){
    $mail = $_GET['mail'];
}

if(isset($_GET['mdp'])){
    $mdp = $_GET['mdp'];
}

/* *** PARTIE USAGE DU MODELE *** */

$clientDAO = new ClientDAO();

$infoClient = $clientDAO->getClient($mail, $mdp);
if(!empty($infoClient)){
    foreach($infoClient[0] as $key => $value){
        $_SESSION[$key] = $value;
    }
}

/* *** GESTION DE LA VUE *** */

$view = new View();

if(!empty($infoClient)){
    $view->display('index.view.php');
}
else{
    $mauvaisId = "mauvaisId";
    $view->assign('mauvaisId', $mauvaisId);
    $view->display('connect.view.php');
}


?>
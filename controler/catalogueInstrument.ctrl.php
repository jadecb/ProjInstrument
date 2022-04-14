<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
if(isset($_SESSION['gestionnaire'])){
    $gestionnaire = $_SESSION['gestionnaire'];
}


/* *** PARTIE USAGE DU MODELE *** */
require_once('../model/allInstruments.php');
// tableau contenant tous les noms d'instrument


/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($_SESSION['prenom'])){
    $view->assign('prenom',$prenom);
}
if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->assign('allInstruments',$allInstruments);
$view->display('catalogueInstrument.view.php');

?>
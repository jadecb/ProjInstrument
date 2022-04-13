<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

/* *** PARTIE USAGE DU MODELE *** */

// tableau contenant tous les noms d'instrument
require_once('../model/allInstruments.php');

/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($_SESSION['prenom'])){
    $view->assign('prenom',$prenom);
}
$view->assign('allInstruments',$allInstruments);
$view->display('catalogue.view.php');

?>
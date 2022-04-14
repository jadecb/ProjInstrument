<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}

/* *** PARTIE USAGE DU MODELE *** */

/* *** GESTION DE LA VUE *** */

$view = new View();

if(isset($prenom)){
    $view->assign('prenom',$prenom);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}

require_once('../model/allInstruments.php');

if(isset($_SESSION['prenom'])&& $_SESSION['gestionnaire']==0){
    $view->assign('allInstruments',$allInstruments);
    $view->display('catalogue.view.php');
}
else {
    $view->assign('allInstruments',$allInstruments);
    $view->display('index.view.php');
}


?>
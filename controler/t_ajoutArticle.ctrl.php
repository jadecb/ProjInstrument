<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
else{
    header('Location: index.ctrl.php');
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
else{
    header('Location: index.ctrl.php');
}

if(isset($_GET['article'])){
    $article = $_GET['article'];
}
else{
    header('Location: ajoutInfoArticle.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */
if($article == "instrument"){
    require('../model/allInstruments.php');
}

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
if($article == "instrument"){
    $view->assign('allInstruments',$allInstruments);
    $view->display('choixAjoutInstrument.view.php');
}
else {
    $view->display('ajoutAccessoire.view.php');
}

?>
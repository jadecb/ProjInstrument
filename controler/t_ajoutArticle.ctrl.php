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

// Vérification que le client est bien gestionnaire sinon renvoi sur index
if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1 && $_SESSION['nbArticlePanier']){
    $gestionnaire = true;
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}
else{
    header('Location: index.ctrl.php');
}

// Vérification que le type d'article est bien récupérer sinon renvoi sur le controleur d'avant
if(isset($_GET['article'])){
    $article = $_GET['article'];
}
else{
    header('Location: ajoutInfoArticle.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

// si volonté d'ajouter un instrument on récupère la liste des types d'instrument
if($article == "instrument"){
    require('../model/allInstruments.php');
}

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('nbArticlePanier',$nbArticlePanier);
if($article == "instrument"){
    $view->assign('allInstruments',$allInstruments);
    $view->display('choixAjoutInstrument.view.php');
}
else {
    $view->display('ajoutAccessoire.view.php');
}

?>

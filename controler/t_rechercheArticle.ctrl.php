<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}

// Vérification que le type d'article est bien récupérer sinon renvoi sur le controleur d'avant
if(isset($_GET['rechercher'])){
    $recherche = $_GET['rechercher'];
}
else{
    header('Location: index.ctrl.php');
}

require_once(__DIR__.'/../model/infoArticleDAO.class.php');

/* *** PARTIE USAGE DU MODELE *** */

//USAGE DE LA DAO
$infoArticleDAO = new InfoArticleDAO();
$allArticles = $infoArticleDAO->getArticleRecherche($recherche);

/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
if($allArticles!= null){
    $view->assign('allArticles',$allArticles);
    $view->display('resultatRecherche.view.php');
}
else{
    require_once('../model/allInstruments.php');
    $view->assign('allInstruments',$allInstruments);
    $view->display('index.view.php');
}

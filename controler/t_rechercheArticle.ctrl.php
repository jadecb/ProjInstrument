<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
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

var_dump($allArticles);
/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
}
$view->assign('allArticles',$allArticles);
$view->display('resultatRecherche.view.php');

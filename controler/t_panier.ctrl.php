<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/panierDAO.class.php');

require_once('../model/allInstruments.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
if(isset($_SESSION['numClient']) && isset($_GET['numArticle'])){
    $numArticle = $_GET['numArticle'];
}else{
    header('Location: index.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

$panierdao = new PanierDAO();
try{
    $panierdao->ajoutDansPanier($_SESSION['numClient'], $numArticle);
}
catch(\PDOException $e) {
    die("Cet article est déjà dans votre panier.");
}

$nbArticlePanier = $panierdao->getNbrArticlePanier($_SESSION['numClient']);

// tableau contenant tous les noms d'instrument


/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->assign('allInstruments', $allInstruments);
$view->assign('nbArticlePanier', $nbArticlePanier);
$view->display('index.view.php');

?>
<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/accessoireDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}

/* *** PARTIE USAGE DU MODELE *** */

$accessoireDAO = new AccessoireDAO();
$allAccessoires = $accessoireDAO->getAllAccessoire();


/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->assign('allAccessoires',$allAccessoires);
$view->display('catalogueAccessoire.view.php');

?>
<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticle.class.php');
require_once(__DIR__.'/../model/infoArticleDAO.class.php');
require_once(__DIR__.'/../model/infoInstrument.class.php');
require_once('../model/allInstruments.php');



/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
else{
    header('Location: index.ctrl.php');
}

// Vérification que le client est bien gestionnaire sinon renvoi sur index
if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
else{
    header('Location: index.ctrl.php');
}

if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

// Vérification que le numéro d'article est bien récupéré sinon renvoi sur index
if(isset($_GET['numArticle'])){
    $numarticle = $_GET['numArticle'];
}
else{
    header('Location: index.ctrl.php');
}


require_once(__DIR__.'/../model/infoArticleDAO.class.php');
/* *** PARTIE USAGE DU MODELE *** */

// Récupération du type de l'article
$infoArticleDAO = new infoArticleDAO();
$article = $infoArticleDAO->getType($numarticle);


require_once('../model/InfoArticleAttributs.php');
if($article == "accessoire"){
    require_once('../model/InfoAccessoireAttributs.php');
    $InfoArticleAttributs = array_merge($InfoArticleAttributs,$InfoAccessoireAttributs);
    $infoarticle = $infoArticleDAO->getArticle($numarticle);

}
else{
    require_once('../model/InfoInstrumentAttributs.php');
    require_once('../model/InstrumentsAttributs.php');
    $InfoArticleAttributs = array_merge($InfoArticleAttributs, $InfoInstrumentAttributs);
    $InfoArticleAttributs[] = array_keys($InstrumentsAttributs[$article])[0];
    $infoarticle = $infoArticleDAO->getInstrument($numarticle);
}



$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('type',$article);
$view->assign('infoarticle',$infoarticle);
$view->assign('nbArticlePanier', $nbArticlePanier);
$view->assign('allInstruments',$allInstruments);
$view->assign('numArticle', $numarticle);
$view->display('editerArticle.view.php');

?>
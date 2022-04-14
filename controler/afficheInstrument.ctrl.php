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

// Récupération du type d'instrumment voulant etre affiché
// si non trouvé renvoi au controleur précédent
if(isset($_GET['instrument']) && isset($_GET['numArticle'])){
    $instrument = $_GET['instrument'];
    $numArticle = $_GET['numArticle'];
}
else{
    header('Location: catalogue.ctrl.php');
}

// ajout de la classDAO de l'instrument choisi
require_once(__DIR__.'/../model/'.$instrument.'DAO.class.php');
/* *** PARTIE USAGE DU MODELE *** */

// DAO
$DAO = $instrument.'DAO';
$DAO = new $DAO();

$method = 'get'.ucfirst($instrument);
$$instrument = $DAO->$method($numArticle);

require_once('../model/InfoInstrumentAttributs.php');
require_once('../model/InstrumentsAttributs.php');
$instrumentAttributs = $InstrumentsAttributs[$instrument];

/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->assign('instrument',$instrument);
$view->assign('tabInfosInstrument',$$instrument[0]);
$view->assign('InfoInstrumentAttributs',$InfoInstrumentAttributs);
$view->assign('instrumentAttributs',$instrumentAttributs);

$view->display('afficheInstrument.view.php');

?>
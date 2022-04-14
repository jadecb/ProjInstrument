<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
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
if(isset($_SESSION['prenom'])){
    $view->assign('prenom',$prenom);
}

$view->assign('instrument',$instrument);
$view->assign('tabInfosInstrument',$$instrument);
$view->assign('InfoInstrumentAttributs',$InfoInstrumentAttributs);
$view->assign('instrumentAttributs',$instrumentAttributs);

$view->display('afficheInstrument.view.php');

?>
<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

// Récupération du type d'instrumment voulant etre affiché
// si non trouvé renvoi au controleur précédent
if(isset($_GET['instrument'])){
    $instrument = $_GET['instrument'];
}
else{
    header('Location: catalogue.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

require('../model/InstrumentsAttributs.php');
$instrumentAttribut = $InstrumentsAttributs[$instrument];

/* *** GESTION DE LA VUE *** */

$view = new View();


$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('instrument',$instrument);
$view->assign('instrumentAttribut',$instrumentAttribut);
$view->display('ajoutInstrument.view.php');

?>
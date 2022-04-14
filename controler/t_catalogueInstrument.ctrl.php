<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}

// Récupération du type d'instrumment voulant etre affiché
// si non trouvé renvoi au controleur précédent
if(isset($_GET['instrument'])){
    $instrument = $_GET['instrument'];
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

$method = 'getAll'.$instrument;
$allInstrument = $DAO->$method();
/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->assign('instrument',$instrument);
$view->assign('allInstruments',$allInstrument);
$view->display('afficheInstruments.view.php');

?>
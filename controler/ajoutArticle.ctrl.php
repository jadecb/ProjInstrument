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

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
else{
    header('Location: index.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

/* *** GESTION DE LA VUE *** */

$view = new View();

if(isset($prenom)){
    $view->assign('prenom',$prenom);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}

$view->display('ajoutArticle.view.php');

?>
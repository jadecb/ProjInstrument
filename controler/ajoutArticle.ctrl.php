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
// Vérification que le client est bien gestionnaire sinon renvoi sur index
if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
else{
    header('Location: index.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);

$view->display('ajoutArticle.view.php');

?>
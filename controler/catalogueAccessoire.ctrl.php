<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/accessoireDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}


/* *** PARTIE USAGE DU MODELE *** */

$accessoireDAO = new AccessoireDAO();
$allAccessoires = $accessoireDAO->getAllAccessoire();
var_dump($_SESSION);

/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($_SESSION['prenom'])){
    $view->assign('prenom',$prenom);
}
$view->assign('allAccessoires',$allAccessoires);
$view->display('catalogueAccessoire.view.php');

?>
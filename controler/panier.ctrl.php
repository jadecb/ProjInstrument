<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/panierDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
if(isset($_SESSION['gestionnaire'])){
    $gestionnaire = $_SESSION['gestionnaire'];
}
if(isset($_SESSION['numClient'])){
    $numclient = $_SESSION['numClient'];
}
/* *** PARTIE USAGE DU MODELE *** */

$panierdao = new PanierDAO();
$AllNumArticles = $panierdao->getAllNumArticle($numclient);
var_dump($AllNumArticles);



// tableau contenant tous les noms d'instrument


/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($_SESSION['prenom'])){
    $view->assign('prenom',$prenom);
}
if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
$view->display('panier.view.php');

?>
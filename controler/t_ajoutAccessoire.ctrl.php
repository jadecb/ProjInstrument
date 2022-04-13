<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticle.class.php');
require_once(__DIR__.'/../model/infoArticleDAO.class.php');
require_once(__DIR__.'/../model/accessoire.class.php');
require_once(__DIR__.'/../model/accessoireDAO.class.php');


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

if(isset($_GET['type']) && isset($_GET['fournisseur']) && isset($_GET['marque']) && isset($_GET['materiaux']) && isset($_GET['prix']) && isset($_GET['nomArticle'])){
    $t = $_GET['type'];
    $r = $_GET['fournisseur'];
    $mar = $_GET['marque'];
    $mat = $_GET['materiaux'];
    $p = $_GET['prix'];
    $na = $_GET['nomArticle'];
}

/* *** PARTIE USAGE DU MODELE *** */
$infoArticleDAO = new InfoArticleDAO();
$numArticle = $infoArticleDAO->getDernierNumArticle()+1;
// DAO
$accessoireDAO = new AccessoireDAO();

// declaration d'une variable contenant l'objet Accessoire
$accessoire = new Accessoire($numArticle, $na, $p, $r, $mat, $mar, $t);
$accessoireDAO->ajoutAccessoire($accessoire);




/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->display('index.view.php');

?>
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

// Vérification que le client est bien gestionnaire sinon renvoi sur index
if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1 && isset($_SESSION['nbArticlePanier'])){
    $gestionnaire = true;
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}
else{
    header('Location: index.ctrl.php');
}

// vérification que toutes les infos sur l'accessoire à ajouter sont présentes
if(isset($_GET['type']) && isset($_GET['fournisseur']) && isset($_GET['marque']) && isset($_GET['materiaux']) && isset($_GET['prix']) && isset($_GET['nomArticle'])){
    $t = $_GET['type'];
    $r = $_GET['fournisseur'];
    $mar = $_GET['marque'];
    $mat = $_GET['materiaux'];
    $p = $_GET['prix'];
    $na = $_GET['nomArticle'];
}

/* *** PARTIE USAGE DU MODELE *** */

// DAO
$infoArticleDAO = new InfoArticleDAO();
$accessoireDAO = new AccessoireDAO();

// Instanciation de l'accessoire à ajouter
$numArticle = $infoArticleDAO->getDernierNumArticle()+1;
$accessoire = new Accessoire($numArticle, $na, $p, $r, $mat, $mar, $t);

// Requete de l'ajout de l'accessoire dans la DB
$accessoireDAO->ajoutAccessoire($accessoire);

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('nbArticlePanier',$nbArticlePanier);
$view->display('index.view.php');

?>

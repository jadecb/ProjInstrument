<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticleDAO.class.php');
require_once(__DIR__.'/../model/panierDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}
if(isset($_SESSION['numClient'])){
    $numclient = $_SESSION['numClient'];
}
/* *** PARTIE USAGE DU MODELE *** */

$panierdao = new PanierDAO();
$infoArticleDAO = new InfoArticleDAO();
$AllNumArticles = $panierdao->getAllNumArticle($numclient);
foreach($AllNumArticles as $tab){
    $allArticle[] = $infoArticleDAO->getArticle(intval($tab['numArticle']));
}

// tableau contenant tous les noms d'instrument


/* *** GESTION DE LA VUE *** */

$view= new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}
if(isset($allArticle)){
	$view->assign('allArticle',$allArticle);	
}
$view->assign('numClient',$numclient);
$view->display('panier.view.php');

?>

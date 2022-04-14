<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom']) && isset($_SESSION['nbArticlePanier'])){
    $prenom = $_SESSION['prenom'];
    $nbArticlePanier = $_SESSION['nbArticlePanier'];
}

if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1){
    $gestionnaire = true;
}

// Récupération du type d'instrumment voulant etre affiché
// si non trouvé renvoi au controleur précédent
if(isset($_GET['numArticle'])){
    $numArticle = $_GET['numArticle'];
}
else{
    header('Location: catalogue.ctrl.php');
}


require_once(__DIR__.'/../model/infoArticleDAO.class.php');
/* *** PARTIE USAGE DU MODELE *** */

// Récupération du type de l'article
$infoArticleDAO = new infoArticleDAO();
$article = $infoArticleDAO->getType($numArticle);
// récupération des attributs de l'article
require_once('../model/InfoArticleAttributs.php');
if($article == "accessoire"){
    require_once('../model/InfoAccessoireAttributs.php');
    $InfoArticleAttributs = array_merge($InfoArticleAttributs,$InfoAccessoireAttributs);
}
else{
    require_once('../model/InfoInstrumentAttributs.php');
    require_once('../model/InstrumentsAttributs.php');
    $InfoArticleAttributs = array_merge($InfoArticleAttributs, $InfoInstrumentAttributs);
    $InfoArticleAttributs[] = array_keys($InstrumentsAttributs[$article])[0];
}
// ajout de la classDAO de l'article choisi
require_once(__DIR__.'/../model/'.$article.'DAO.class.php');

// DAO
$DAO = $article.'DAO';
$DAO = new $DAO();

$method = 'get'.ucfirst($article);
$$article = $DAO->$method($numArticle);



/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
    $view->assign('nbArticlePanier',$nbArticlePanier);
}

if(isset($gestionnaire)){
    $view->assign('gestionnaire',$gestionnaire);
}

$view->assign('tabInfosArticle',$$article[0]);
$view->assign('InfoArticleAttributs',$InfoArticleAttributs);
$view->display('afficheArticle.view.php');

?>
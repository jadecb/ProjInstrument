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

$infoArticleDAO = new InfoArticleDAO();
$numArticle = $infoArticleDAO->getDernierNumArticle()+1;
if(isset($type) and isset ($fournisseur) and isset($marque) and isset($materiau) and isset($prix) and isset($nomArticle)){
    $t = $type;
    $r = $fournisseur;
    $mar = $marque;
    $mat = $materiaux;
    $na = $nomArticle;
    $p = $prix;
}

/* *** PARTIE USAGE DU MODELE *** */

// DAO
$DAO = new AccessoireDAO($numArticle, $na, $p, $f, $mat, $mar, $t);


// declaration d'une variable contenant l'objet Accessoire
$accessoire = new Accessoire();
// initialisation des attribut "info article" de l'objet Accessoire
require('../model/InfoArticleAttributs.php');
foreach($InfoArticleAttributs as $name){
    if(isset($_GET[$name])){
        $accessoire->__set($name,$_GET[$name]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}

// initialisation des attribut propre à l'objet $accessoire
require('../model/AccessoireAttributs.php');
$accessoireAttribut = $AccessoireAttributs[$accessoire];
foreach($accessoireAttribut as $nameAttribut => $tab){
    if(isset($_GET[$nameAttribut])){
        $accessoire->__set($nameAttribut,$_GET[$nameAttribut]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->display('index.view.php');

?>
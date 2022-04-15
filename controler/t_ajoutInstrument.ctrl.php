<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticle.class.php');
require_once(__DIR__.'/../model/infoArticleDAO.class.php');
require_once(__DIR__.'/../model/infoInstrument.class.php');
require_once('../model/allInstruments.php');



/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
else{
    header('Location: index.ctrl.php');
}

// Vérification que le client est bien gestionnaire sinon renvoi sur index
if(isset($_SESSION['gestionnaire']) && $_SESSION['gestionnaire']==1 && $_SESSION['nbArticlePanier']){
	$nbArticlePanier = $_SESSION['nbArticlePanier'];
    $gestionnaire = true;
}
else{
    header('Location: index.ctrl.php');
}

// Vérification que le type d'instrument est bien récupéré, sinon renvoi sur le controleur d'avant
if(isset($_GET['instrument'])){
    $instrument = $_GET['instrument'];
}
else{
    header('Location: t_ajoutArticle.ctrl.php');
}

// ajout des class et classDAO de l'instrument choisi
require_once(__DIR__.'/../model/'.$instrument.'.class.php');
require_once(__DIR__.'/../model/'.$instrument.'DAO.class.php');

/* *** PARTIE USAGE DU MODELE *** */

// DAO
$infoArticleDAO = new InfoArticleDAO();
$DAO = $instrument.'DAO';
$DAO = new $DAO();

// declaration d'une variable du nom de $instrument avec une majuscule en première lettre
$nomObjetMaj = ucfirst($instrument);

// instanciation du type d'instrument choisi dans une variable de nom $instrument
$$instrument = new $nomObjetMaj();

// Récupération des attributs "info article" de l'objet $instrument dans la query string
// puis initialisation de l'attribut associé de l'objet $instrument
// si un est manquant renvoi au controleur d'avant
require('../model/InfoArticleAttributs.php');
foreach($InfoArticleAttributs as $name){
    if(isset($_GET[$name])){
        $$instrument->__set($name,$_GET[$name]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}

// Récupération des attributs "info instrument" de l'objet $instrument dans la query string
// puis initialisation de l'attribut associé de l'objet $instrument
// si un est manquant renvoi au controleur d'avant
require('../model/InfoInstrumentAttributs.php');
foreach($InfoInstrumentAttributs as $name){
    if(isset($_GET[$name])){
        $$instrument->__set($name,$_GET[$name]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}

// Récupération des attributs propres à l'objet $instrument dans la query string
// puis initialisation de l'attribut associé de l'objet $instrument
// si un est manquant renvoi au controleur d'avant
require('../model/InstrumentsAttributs.php');
$instrumentAttribut = $InstrumentsAttributs[$instrument];
foreach($instrumentAttribut as $nameAttribut => $tab){
    if(isset($_GET[$nameAttribut])){
        $$instrument->__set($nameAttribut,$_GET[$nameAttribut]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}

// Attribution du numArticle
$$instrument->__set('numArticle', $infoArticleDAO->getDernierNumArticle()+1);

// Appel à la DAO pour ajouter le $instrument
$method = 'ajout'.$nomObjetMaj;
$DAO->$method($$instrument);

/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('nbArticlePanier',$nbArticlePanier);
$view->assign('allInstrument',$allInstrument);
$view->display('index.view.php');

?>

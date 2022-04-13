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

if(isset($_GET['instrument'])){
    $instrument = $_GET['instrument'];
}
else{
    header('Location: choixAjoutInstrument.ctrl.php');
}

require_once(__DIR__.'/../model/'.$instrument.'.class.php');

require('../model/InfoArticleAttributs.php');
foreach($InfoArticleAttributs as $value){
    if(isset($_GET[$value])){
        $$value = $_GET[$value];
    }
    else{
        header('Location: choixAjoutInstrument.ctrl.php');
    }
}

/* *** PARTIE USAGE DU MODELE *** */

// declaration d'une variable au nom du constructeur de $instrument
$constructeurObjet = ucfirst($instrument);
// declaration d'une variable contenant l'objet $instrument
$instrument = new $constructeurObjet();

// recuperation des attributs de l'instrument sélectionné
// et création d'une variable pour chaque attribut
require('../model/InfoInstrumentsAttributs');
foreach($InfoInstrumentsAttributs as $value){
    if(isset($_GET[$value])){
        $$value = $_GET[$value];
    }
    else{
        header('Location: choixAjoutInstrument.ctrl.php');
    }
}

/* *** GESTION DE LA VUE *** */

$view = new View();

$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('allInstruments',$allInstruments);
$view->display('ajoutInfoArticle.view.php');

?>
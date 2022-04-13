<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticle.class.php');
require_once(__DIR__.'/../model/infoInstrument.class.php');


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
    header('Location: t_ajoutArticle.ctrl.php');
}

require_once(__DIR__.'/../model/'.$instrument.'.class.php');
require_once(__DIR__.'/../model/'.$instrument.'DAO.class.php');

/* *** PARTIE USAGE DU MODELE *** */

// DAO
$DAO = $instrument.'DAO';
$DAO = new $DAO();

// declaration d'une variable au nom du constructeur de $instrument
$nomObjetMaj = ucfirst($instrument);
// declaration d'une variable contenant l'objet $instrument
$$instrument = new $nomObjetMaj();

// initialisation des attribut "info article" de l'objet $instrument
require('../model/InfoArticleAttributs.php');
foreach($InfoArticleAttributs as $name){
    if(isset($_GET[$name])){
        $$instrument->__set($name,$_GET[$name]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}
// initialisation des attribut "info instrument" de l'objet $instrument
require('../model/InfoInstrumentAttributs.php');
foreach($InfoInstrumentAttributs as $name){
    if(isset($_GET[$name])){
        $$instrument->__set($name,$_GET[$name]);
    }
    else{
        header('Location: ajoutArticle.ctrl.php');
    }
}
// initialisation des attribut propre à l'objet $instrument
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

var_dump($$instrument);
$method = 'ajout'.$nomObjetMaj;
$DAO->$method($$instrument);
/* *** GESTION DE LA VUE *** */

$view = new View();

$view->display('index.view.php');

?>
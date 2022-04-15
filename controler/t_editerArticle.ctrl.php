<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/infoArticle.class.php');
require_once(__DIR__.'/../model/infoArticleDAO.class.php');
require_once(__DIR__.'/../model/infoInstrument.class.php');
require_once('../model/allInstruments.php');

require('../model/InfoArticleAttributs.php');
require('../model/InstrumentsAttributs.php');
require('../model/InfoInstrumentAttributs.php');




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

//t_editerArticle.ctrl.php?instrument=banjo&NbrPiston=4&Nom=Tuba+pour+joueur+confirm%C3%A9&Prix=899.99&MateriauxPrincipal=cuivre&Couleur=dor%C3%A9&Largeur=86&Longueur=30&Hauteur=20


$type = $_GET['type'];
if($type!='accessoire'){
    if(isset($_GET['instrument'])){
        $type=$_GET['instrument'];
    }

require_once(__DIR__.'/../model/'.$type.'.class.php');
require_once(__DIR__.'/../model/'.$type.'DAO.class.php');
    var_dump($type);
    $typeDAO=ucfirst($type);
    var_dump($typeDAO);

    $method = $typeDAO.'DAO';
    $typeDAO = new $method();

    $type = ucfirst($type);
    $a = new $type;


    $InfoArticleAttributs = array_merge($InfoArticleAttributs, $InfoInstrumentAttributs);
    $InfoArticleAttributs[] = array_keys($InstrumentsAttributs[lcfirst($type)])[0];

    var_dump($a);
foreach($InfoArticleAttributs as $name){

    if(isset($_GET[$name])){
        var_dump($_GET[$name]);
        $a->__set($name, $_GET[$name]);
    }
}
var_dump($a);

    $method->editInstrument($a, $numArticle);
}

?>
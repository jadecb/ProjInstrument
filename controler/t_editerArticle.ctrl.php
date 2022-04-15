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

//t_editerArticle.ctrl.php?instrument=banjo&NbrPiston=4&Nom=Tuba+pour+joueur+confirm%C3%A9&Prix=899.99&MateriauxPrincipal=cuivre&Couleur=dor%C3%A9&Largeur=86&Longueur=30&Hauteur=20


$type = $_GET['type'];
if($type!='accessoire'){
    if(isset($_GET['instrument'])){
        $ins=$_GET['instrument'];
    }

require_once(__DIR__.'/../model/'.$ins.'.class.php');
require_once(__DIR__.'/../model/'.$ins.'DAO.class.php');
    var_dump($ins);
    $insDAO=ucfirst($ins);
    var_dump($insDAO);

    $method = $insDAO.'DAO';
    $insDAO = new $method();
    require('../model/InfoArticleAttributs.php');
    require('../model/InstrumentsAttributs.php');
    require('../model/InfoInstrumentAttributs.php');

    $InfoArticleAttributs = array_merge($InfoArticleAttributs, $InfoInstrumentAttributs);
    $InfoArticleAttributs[] = array_keys($InstrumentsAttributs[$ins])[0];
    $ins = ucfirst($ins);
    $a = new $ins;

    foreach($InfoArticleAttributs as $nameAttribut => $tab){
        if(isset($_GET[$nameAttribut])){
            $a->__set($nameAttribut,$_GET[$nameAttribut]);
        }
        else{
            header('Location: ajoutArticle.ctrl.php');
        }
    }




    var_dump($InfoArticleAttributs);

    

    $method->editInstrument($ins, $numArticle);

}

?>

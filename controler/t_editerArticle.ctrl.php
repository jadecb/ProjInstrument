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
    
    $insDAO=ucfirst($ins);
    require_once(__DIR__.'/../model/'.$ins.'.class.php');
    require_once(__DIR__.'/../model/'.$ins.'DAO.class.php');
    $insDAO = new $insDAO.'DAO';

    require('../model/InstrumentsAttributs.php');
    $instrumentAttribut = $InstrumentsAttributs[$ins];
    
    foreach($instrumentAttribut as $nameAttribut => $tab){
        if(isset($_GET[$nameAttribut])){
            $$instrument->__set($nameAttribut,$_GET[$nameAttribut]);
        }
        else{
            header('Location: index.ctrl.php');
        }
    }
    var_dump($$instrument);

}

?>

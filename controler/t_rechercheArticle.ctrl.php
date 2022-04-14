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


// Vérification que le type d'article est bien récupérer sinon renvoi sur le controleur d'avant
if(isset($_GET['rechercher'])){
    $article = $_GET['rechercher'];
}
else{
    header('Location: index.ctrl.php');
}



require_once(__DIR__.'/../model/infoArticleDAO.class.php');

//USAGE DE LA DAO

$rech=$_GET['rechercher'];
$req = 'SELECT numArticle FROM infoArticle WHERE nom LIKE %'.$rech.'%;';



$dao = new InfoArticleDAO(); // instancie l'objet DAO
        $req = 'SELECT max(numArticle) FROM InfoArticle';
        $resultat = $this->db->query($req);


/* *** PARTIE USAGE DU MODELE *** */



/* *** GESTION DE LA VUE *** */

$view = new View();
$view->assign('prenom',$prenom);
$view->assign('gestionnaire',$gestionnaire);
$view->assign('resultat',$sth);
$view->display('resultatRecherche.view.php');

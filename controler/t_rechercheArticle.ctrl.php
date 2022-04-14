<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

// Vérification que le type d'article est bien récupérer sinon renvoi sur le controleur d'avant
if(isset($_GET['rechercher'])){
    $recherche = $_GET['rechercher'];
}
else{
    header('Location: index.ctrl.php');
}

require_once(__DIR__.'/../model/infoArticleDAO.class.php');

//USAGE DE LA DAO
$infoArticleDAO = new InfoArticleDAO();

$typeArticle = 



$dao = new InfoArticleDAO(); // instancie l'objet DAO
        $req = 'SELECT max(numArticle) FROM InfoArticle';
        $resultat = $this->db->query($req);


/* *** PARTIE USAGE DU MODELE *** */



/* *** GESTION DE LA VUE *** */

$view = new View();
if(isset($prenom)){
    $view->assign('prenom',$prenom);
}
$view->assign('gestionnaire',$gestionnaire);
$view->assign('resultat',$sth);
$view->display('resultatRecherche.view.php');

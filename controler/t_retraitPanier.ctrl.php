<?php
require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/panierDAO.class.php');

/* *** PARTIE RECUPERATION DES DONNEES *** */

if(isset($_GET['numClient']) && isset($_GET['numArticle'])){
	$numClient =  $_GET['numClient'];
	$numArticle = $_GET['numArticle'];
}
else{
	header('Location: panier.ctrl.php');
}

/* *** PARTIE USAGE DU MODELE *** */

$panierDAO = new PanierDAO();
try{
	$panierDAO->retraitDansPanier($numClient, $numArticle);
}
catch(\PDOException $e){
	die("Cet article n'est pas dans le panier");
}
$_SESSION['nbArticlePanier']--;
header('Location: panier.ctrl.php');
/* *** GESTION DE LA VUE *** */


?>

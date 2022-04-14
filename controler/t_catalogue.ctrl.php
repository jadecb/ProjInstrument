<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once(__DIR__.'/../model/accessoireDAO.class.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}

// Récupération du choix voulant etre affiché
// si non trouvé renvoi au controleur précédent

if(isset($_GET['choix'])){
    $choix = $_GET['choix'];
}
else{
    header('Location: catalogue.ctrl.php');
}


if($choix=='instrument'){
    header('Location: catalogueInstrument.ctrl.php');
}

else if($choix=='accessoire'){
    header('Location: catalogueAccessoire.ctrl.php');
}

else{
    header('Location: catalogue.ctrl.php');
}

?>
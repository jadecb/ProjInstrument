<?php

require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

/* *** PARTIE USAGE DU MODELE *** */
unset($_SESSION);

/* *** GESTION DE LA VUE *** */

$view = new View();

$view->display('index.view.php');


?>
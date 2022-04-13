<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

/* *** PARTIE USAGE DU MODELE *** */

unset($_SESSION);
session_destroy();
header('Location: index.ctrl.php');

?>
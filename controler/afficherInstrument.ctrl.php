<?

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */

/* *** PARTIE USAGE DU MODELE *** */

/* *** GESTION DE LA VUE *** */

$view = new View();

$view->display('instrument.view.php');

?>
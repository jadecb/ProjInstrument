<?

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

/* *** PARTIE RECUPARATION DES DONNEES *** */
if(isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}


/* *** PARTIE USAGE DU MODELE *** */
require_once('../model/allInstruments.php');



/* *** GESTION DE LA VUE *** */

$view= new View();
$View->assign('allInstruments',$allInstruments)

$view->display('catalogue.view.php');

?>
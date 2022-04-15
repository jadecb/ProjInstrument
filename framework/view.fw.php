<?php

// Classe minimaliste pour normaliser l'usage d'une vue
// Cette classe est inspiré du moteur et compilateur de template Smarty
class View {
  // Paramètres de la vue, dans un tableau associatif
  private array $param;

  // Constructeur d'une vue
  function __construct() {
    // Initialise un tableau vide de paramètres
    $this->param = array();
  }

  // Ajoute un paramètre à la vue
  // Il n'y a aucune contrainte de type pour la valeur
  // Cela peut être par exemple un objet du modèle.
  function assign(string $varName,$value) {
    $this->param[$varName] = $value;
  }

  // Affiche la vue : on indique uniquement son nom
  function display(string $filename) {

    // Ajoute le chemin relatif vers le fichier de la vue
    $filePath = "../view/".$filename;

    // Tous les paramètres de $this-param sont dupliqués en des variables
    // locales à la fonction display. Cela simplifie l'expression des
    // valeurs de la vue. Il faut simplement utiliser <?= $variable

    // Parcourt touts les paramètres de la vue
    foreach ($this->param as $key => $value) {
      // La notation $$ désigne une variable dont le nom est dans une autre variable
      // Cela crée une variable locale dont le nom est dans la variable $key
      $$key = $value;
    }

    // Inclusion de la vue
    // Comme cette inclusion est dans la portée de la méthode display alors
    // seules les variables locales à display sont visibles.
    require($filePath);
    // Apres cela le PHP est terminé, plus rien ne s'exécute
    exit(0);
  }
}
?>

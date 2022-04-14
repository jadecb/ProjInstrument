
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sibémol</title>
  <link rel="stylesheet" type="text/css" href="../design/style.css">
  <link rel = "icon" href = "../images/icon.png" type = "image/x-icon">
  <title></title>
</head>
<body>
  <header>
      <a id="index" href="index.ctrl.php"><h1>Sibémol</h1></a>

      <form action="t_rechercheArticle.ctrl.php" method="get">
        <fieldset>
          <label for="rechercher">Rechercher sur le site :</label>
          <input type="text" name="rechercher" required/>
          <input type="submit" value="ENVOYER">
        </fieldset>
</form>

      




      <?php if(isset($prenom)): ?>
        <p>bonjour <?=$prenom?></p>
      <?php endif; ?>

        <!-- Navigation -->
      <nav>
      <ul>
      <?php if(!isset($prenom)): ?>
        <li><a href="inscription.ctrl.php">S'inscrire</a></li>
        <li><a href="connect.ctrl.php">Se connecter</a></li>
      <?php endif; ?>

      <li><a href="catalogue.ctrl.php">Catalogue</a></li>
      <?php if(isset($prenom)): ?>
      <li><a href="panier.ctrl.php">Panier</a></li>
      <?php endif; ?>
      <?php if(isset($prenom)): ?>
        <li><a href="#">Historique</a></li>
        <li><a href="deconnect.ctrl.php">Se déconnecter</a></li>
      <?php endif; ?>

      <?php if(isset($gestionnaire)): ?>
        <li><a href="ajoutArticle.ctrl.php">ajout article</a></li>
      <?php endif; ?>

      </ul>
      </nav>
  </header>

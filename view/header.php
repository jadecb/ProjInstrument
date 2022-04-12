<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sibémol</title>
  <link rel="stylesheet" type="text/css" href="../design/style.css">
  <title></title>
</head>
<body>
  <header>
      <a href="../index.php"><h1>Sibémol</h1></a>

      <?php if(isset($_SESSION['prenom'])): ?>
        <p>bonjour <?=$_SESSION['prenom']?></p>
      <?php endif; ?>

        <!-- Navigation -->
      <nav>
      <ul>
      <?php if(!isset($_SESSION['prenom'])): ?>
        <li><a href="inscription.ctrl.php">S'inscrire</a></li>
        <li><a href="connect.ctrl.php">Se connecter</a></li>
      <?php endif; ?>

      <li><a href="#">Catalogue</a></li>
      <li><a href="#">Panier</a></li>

      <?php if(isset($_SESSION['prenom'])): ?>
        <li><a href="#">Historique</a></li>
        <li><a href="deconnect.ctrl.php">Se déconnecter</a></li>
      <?php endif; ?>

      <?php if(isset($_SESSION['gestionnaire'])&&$_SESSION['gestionnaire']==true): ?>
        <li><a href="gestionArticle.ctrl.php">gestion article</a></li>
      <?php endif; ?>

      </ul>
      </nav>
  </header>

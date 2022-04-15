
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sibémol</title>


  <link rel="stylesheet" type="text/css" href="../design/style.css">
  <link rel = "icon" href = "../images/icon.png" type = "image/x-icon">
  <title></title>
  </div>
</head>
<body>
  <header>
      <a id="index" href="index.ctrl.php"><h1 class="elegantshadow"> Sibémol </h1></a>
      <div class="muzieknootjes">
        <div class="noot-1">
        &#9835; &#9833;
        </div>
        <div class="noot-2">
        &#9833;
        </div>
        <div class="noot-3">
        &#9839; &#9834;
        </div>
        <div class="noot-4">
        &#9834;
        </div>
        <div class="noot-5">
        &#9835; &#9833;
        </div>
        <div class="noot-6">
        &#9833;
        </div>
        <div class="noot-7">
        &#9839; &#9834;
        </div>
        <div class="noot-8">
        &#9834;
        </div>
      </div>

      <form id= "barreRecherche"action="t_rechercheArticle.ctrl.php" method="get" autocomplete= "off">
          <input name= "q" type="text" size= "15" placeholder= "search… "required/>
          <input id= "button-submit" type="submit" value="">
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
      <li><a href="panier.ctrl.php">Panier(<?=$nbArticlePanier?>)</a></li>
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
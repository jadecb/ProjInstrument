<?php require("../view/header.php"); ?>

<main id ="panier">
    
    <p>Panier de <?=$prenom?></p>

	<?php if(isset($allArticle)): ?>
		<div>
		<?php foreach($allArticle as $tabInfosArticle): ?>
			<a href="afficheArticle.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>">
			<img src="../images/<?=$tabInfosArticle['numArticle']?>.jpg"/>
			</a>
			<div>
			<?=$tabInfosArticle['nom']?>
			<br>
			<?=$tabInfosArticle['prix']?>
			<a href="t_retraitPanier.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>&numClient=<?=$numClient?>">
				<img src="../images/corbeille.jpg" alt="logo_poubelle"/>
			</a>
			</div>
		<?php endforeach; ?>
		</div>
	<?php else: ?>
		<p>Panier vide </p>
	<?php endif; ?>

</main>


<?php require("../view/footer.php"); ?>

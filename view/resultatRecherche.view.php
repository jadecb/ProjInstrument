<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allArticles as $key => $tab): ?>
        <?php foreach ($tab as $tabInfosArticle): ?>
            <div>
                <a href="afficheArticle.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>">
                    <img src="../images/<?=$tabInfosArticle['numArticle']?>.jpg">
                    <div>
                        <h2><?=$tabInfosArticle['nom']?></h2>
                        <p>Prix : <?=$tabInfosArticle['prix']?> €</p>
                    </div>
                </a>
                <?php if(isset($prenom)): ?>
                    <div id="panier"><a href="t_panier.ctrl.php"><img src="../images/panier.png" alt="image panier"></a></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</main>

<?php require("../view/footer.php"); ?>
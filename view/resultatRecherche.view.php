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
                <div id="panier">
                        <a href="#"><img src="../images/panier.png" alt=""></a>
                    </div>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</main>

<?php require("../view/footer.php"); ?>
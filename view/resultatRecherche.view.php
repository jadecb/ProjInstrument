<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allArticles as $key => $tab): ?>
        <?php foreach ($tab as $tabInfosArticle): ?>
            <div>
                <a href="#">
                    <img src="#">
                    <div>
                        <h2><?=$tabInfosArticle['nom']?></h2>
                        <p>Prix : <?=$tabInfosArticle['prix']?> €</p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
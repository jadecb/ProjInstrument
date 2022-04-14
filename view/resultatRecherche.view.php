<?php require("../view/header.php"); ?>

<main>
    <?php foreach ($allArticles as $tabInfosArticle): ?>
        <div>
            <a href="#">
                <img src="../images/<?=$instrument?>/<?=$tabInfosInstrument['numArticle']?>.jpg">
                <div>
                    <h2><?=$tabInfosInstrument['nom']?></h2>
                    <p>Prix : <?=$tabInfosInstrument['prix']?> €</p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
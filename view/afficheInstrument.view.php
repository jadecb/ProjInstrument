<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allInstruments as $tabInfosInstrument): ?>
        <div>
            <a href="t_catalogue.ctrl.php?instrument=<?=$instrument?>">
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
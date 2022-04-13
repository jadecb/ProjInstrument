<?php require("../view/header.php"); ?>

<main id="catalogue">
    <?php foreach ($allInstruments as $tabInfosInstrument): ?>
        <figure>
            <a href="t_catalogue.ctrl.php?instrument=<?=$instrument?>">
                <img src="../images/<?=$instrument?>/<?=$tabInfosInstrument['numArticle']?>.jpg">
            
                <figcaption>
                    <?=$instrument?>
                </figcaption>
            </a>
        </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
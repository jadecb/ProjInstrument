<?php require("../view/header.php"); ?>

<main id="catalogue">
    <?php foreach ($allInstruments as $instrument): ?>
        <figure>
            <a href="t_catalogue.ctrl.php?instrument=<?=$instrument?>">
                <img src="../images/catalogue/<?=$instrument?>.jpg">
            
                <figcaption>
                    <?=$instrument?>
                </figcaption>
            </a>
        </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
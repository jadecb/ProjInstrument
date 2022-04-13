<? php require("../view/header.php"); ?>

<main>
     action="t_catalogue.ctrl.php" method="get"
    <?php foreach ($allInstruments as $instrument): ?>
    <figure>
    <a href="t_catalogue.ctrl.php?instrument=<?=$instrument>"> <img src="../images/catalogue/<?=$instrument?>.jpg"> </a>
    <figcaption>
    <?=$instrument?>
    </figcaption>
    </a>
    </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
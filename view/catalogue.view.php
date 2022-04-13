<?php require("../view/header.php"); ?>

<main>
    <?php foreach ($allInstruments as $instrument): ?>
        <figure>
            <a href="t_catalogue.ctrl.php?instrument=<?=$instrument?>">
                <img src="../images/catalogue/<?=$instrument?>.jpg" width="100px" height="100px">
            
                <figcaption>
                    <?=$instrument?>
                </figcaption>
            </a>
        </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
<?php require("../view/header.php"); ?>

<main id="catalogue">
    <?php foreach ($allAccessoires as $accessoire): ?>
        <figure>
            <a href="t_catalogueAccessoire.ctrl.php?accessoire=<?=$accessoire?>">
                <img src="../images/<?=$accessoire?>.jpg">
            
                <figcaption>
                    <?=$accessoire?>
                </figcaption>
            </a>
        </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
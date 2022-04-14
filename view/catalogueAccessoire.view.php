<?php require("../view/header.php"); ?>

<main id="catalogue">
    <?php foreach ($allAccessoires as $accessoire): ?>
        <figure>
            <a href="#">
                <img src="../images/<?=$accessoire['numArticle']?>.jpg">
            
                <figcaption>
                    <?=$accessoire['nom']?>
                </figcaption>
            </a>
        </figure>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
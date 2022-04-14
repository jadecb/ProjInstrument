<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allAccessoires as $accessoire): ?>
        <div>
            <a href="afficheArticle.ctrl.php?numArticle=<?=$accessoire['numArticle']?>">
                <img src="../images/<?=$accessoire['numArticle']?>.jpg">
            
                <div>
                    <h2><?=$accessoire['nom']?></h2>
                    <p>Prix : <?=$accessoire['prix']?>€ </p>
                </div>
            </a>
            <div id="panier">
                        <a href="#"><img src="../images/panier.png" alt=""></a>
                    </div>
        </div>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
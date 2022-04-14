<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allInstruments as $tabInfosInstrument): ?>
        <div>
            <a href="afficheInstrument.ctrl.php?instrument=<?=$instrument?>&numArticle=<?=$tabInfosInstrument['numArticle']?>">
                <img src="../images/<?=$tabInfosInstrument[  'numArticle']?>.jpg">
                <div>
                    <h2><?=$tabInfosInstrument['nom']?></h2>
                    <p>Prix : <?=$tabInfosInstrument['prix']?> €</p>
                    
                
                </div>
            </a>
            <div id="panier">
                        <a href="#"><img src="../images/panier.png" alt=""></a>
                    </div>
        </div>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
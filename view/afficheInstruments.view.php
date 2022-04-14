<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
    <?php foreach ($allInstruments as $tabInfosInstrument): ?>
        <div>
            <a href="afficheArticle.ctrl.php?numArticle=<?=$tabInfosInstrument['numArticle']?>">
                <img src="../images/<?=$tabInfosInstrument[  'numArticle']?>.jpg">
                <div>
                    <h2><?=$tabInfosInstrument['nom']?></h2>
                    <p>Prix : <?=$tabInfosInstrument['prix']?> €</p>
                    
                
                </div>
            </a>
            <?php if(isset($prenom)): ?>
                <div id="panier"><a href="t_panier.ctrl.php"><img src="../images/panier.png" alt=""></a></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
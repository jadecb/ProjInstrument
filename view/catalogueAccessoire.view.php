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
            <?php if(isset($prenom)): ?>
                <div id="panier"><a href="t_panier.ctrl.php?numArticle=<?=$accessoire['numArticle']?>"><img src="../images/panier.png" alt=""></a></div>
            <?php endif; ?>
            <?php if (isset($gestionnaire) && $gestionnaire==1): ?>
                <div id="edit"><a href="editerArticle.ctrl.php?numArticle=<?=$accessoire['numArticle']?>"><p>Editer l'article</p></a></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</main>


<?php require("../view/footer.php"); ?>
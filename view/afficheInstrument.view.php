<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
        <div>
                <img src="../images/<?=$instrument?>/<?=$tabInfosInstrument['numArticle']?>.jpg">
                <div>
                    <h2><?=$tabInfosInstrument['nom']?></h2>
                    <p>Prix : <?=$tabInfosInstrument['prix']?> €</p>
                </div>
        </div>
</main>


<?php require("../view/footer.php"); ?>
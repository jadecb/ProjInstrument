<?php require("../view/header.php"); ?>

<?var_dump($method);?>
<main id="afficheInstrument">
        <div>
            <img src="../images/<?=$instrument?>/<?=$tabInfosInstrument['numArticle']?>.jpg">
            <div>
                <h2><?=$tabInfosInstrument['nom']?></h2>
                <p>Prix : <?=$tabInfosInstrument['prix']?> €</p>
            </div>
            <table>
                <?php foreach($InfoInstrumentAttributs as $attribut): ?>
                    <tr><td><?=ucfirst($attribut)?></td><td><?=$tabInfosInstrument[$attribut]?></td></tr>
                <? endforeach; ?>

                <?php foreach($instrumentAttributs as $key => $value): ?>
                    <tr><td><?=ucfirst($key)?></td><td><?=$tabInfosInstrument[$key]?></td></tr>
                <? endforeach; ?>
            </table>
        </div>
</main>

<?php require("../view/footer.php"); ?>

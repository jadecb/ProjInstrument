<?php require("../view/header.php"); ?>

<main>

    <form action="t_editerArticle.ctrl.php" method="get">
        <fieldset>
                
                <p>Editer l'article : </p>
                <?php var_dump($infoarticle);?>
            <!-- partie dynamique sur les articles !-->
            <?php foreach($infoarticle as $key => $value):?>
                <?php if($key!='numArticle'): ?>
                    <?=$champ = ucfirst($key)?>
                    <label for="<?=$champ?>"></label>
                    <input type="text" name="<?=$champ?>" value="<?=$infoarticle[$key]?>" required/>
                <?php endif; ?>
            <?php endforeach;?>
            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
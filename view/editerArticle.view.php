<?php require("../view/header.php"); ?>

<main>

    <form action="t_editerArticle.ctrl.php" method="get">
        <fieldset>
                
                <p>Editer l'article : </p>
            <input type="hidden" name="type" value="<?=$type?>"/>
            <input type="hidden" name="numArticle" value="<?=$numArticle?>"/>



            <!-- partie dynamique sur les articles !-->
            <?php foreach($infoarticle as $key => $value):?>
                <?php if($key!='numArticle'): ?>
                    <?=ucfirst($key)?>
                    <label for="<?=$key?>"></label>
                    <input type="text" name="<?=$key?>" value="<?=$infoarticle[$key]?>" required/>
                <?php endif; ?>
            <?php endforeach;?>
            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
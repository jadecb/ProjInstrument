<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutInstrument.ctrl.php" method="get">
        <fieldset>
                <label for="nomArticle">Nom de l'article </label>
                <input type="text" name="nomArticle" required/>
                <label for="prix">Prix de l'article</label>
                <input type="number" name="prix" min="0" step="0.01" required/>
                <label for="materiauxPrincipal">Matériau principal de l'instrument </label>
                <input type="text" name="materiauxPrincipal" required/>
                <label for="couleur">Couleur de l'instrument </label>
                <input type="text" name="couleur" required/>
                <label for="largeur">Largeur de l'instrument</label>
                <input type="number" name="largeur" min="0" required/>
                <label for="longueur">Longueur de l'instrument</label>
                <input type="number" name="longueur" required/>
                <label for="hauteur">Hauteur de l'instrument</label>
                <input type="number" name="hauteur" min="0" required/>
                <?php foreach($instrumentAttribut as $key => $value): ?>
                    <label for="<?=$key?>"><?=$value['name']?> </label>
                    <input type="<?=$value['type']?>" name="<?=$key?>" required/>
                <? endforeach; ?>
                <input type="hidden" name="instrument" value="<?=$instrument?>">
            <input type="submit" value="AJOUTER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutInstrument.ctrl.php" method="get">
        <fieldset>
                <!-- Partie statique sur les "infoArticle" -->
                <label for="nom">Nom</label>
                <input type="text" name="nom" required/>
                <label for="prix">Prix</label>
                <input type="number" name="prix" min="0" step="0.01" required/>
                <!-- Partie statique sur les "infoInstrument" -->
                <label for="materiauxPrincipal">Matériau principal</label>
                <input type="text" name="materiauxPrincipal" required/>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" required/>
                <label for="largeur">Largeur</label>
                <input type="number" name="largeur" min="0" required/>
                <label for="longueur">Longueur</label>
                <input type="number" name="longueur" min="0" required/>
                <label for="hauteur">Hauteur</label>
                <input type="number" name="hauteur" min="0" required/>
                <!-- Partie dynamique dur les attributs de $instrument -->
                <?php foreach($instrumentAttribut as $key => $value): ?>
                    <label for="<?=$key?>"><?=$value['name']?> </label>
                    <input type="<?=$value['type']?>" name="<?=$key?>" required/>
                <?php endforeach; ?>

                <input type="hidden" name="instrument" value="<?=$instrument?>"/>
            <input type="submit" value="AJOUTER"/>
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
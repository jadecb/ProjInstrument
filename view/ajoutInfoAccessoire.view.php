<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutArticle.ctrl.php" method="get">
        <fieldset>
            
                <p>Type d'article : </p>
                <input type="radio" id="instrument" name="article" value="instrument" checked/>
                <label for="instrument">Instrument</label>
                <input type="radio" id="accessoire" name="article" value="accessoire" />
                <label for="accessoire">Accessoire</label>

            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>

<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutInfoAccessoire.ctrl.php" method="get">
        <fieldset>

                <label for="fournisseur">Fournisseur </label>
                <input type="text" name="fournisseur" required/>
                <label for="materiaux">Matériau principal de l'accessoire </label>
                <input type="text" name="materiaux" required/>
                <label for="marque">Marque</label>
                <input type="text" name="marque" required/>

            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
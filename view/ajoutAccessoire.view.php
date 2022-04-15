<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutAccessoire.ctrl.php" method="get">
        <fieldset>
            <!-- partie dynamique sur les articles !-->
                <label for="nomArticle">Nom</label>
                <input type="text" name="nomArticle" required/>
                <label for="prix">Prix</label>
                <input type="number" name="prix" min="0" step="0.01" required/>
            <!-- partie statique sur les accessoires !-->
                <label for="type">Type d'accessoire</label>
                <input type="text" name="type" required/>
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
<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutAccessoire.ctrl.php" method="get">
        <fieldset>
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
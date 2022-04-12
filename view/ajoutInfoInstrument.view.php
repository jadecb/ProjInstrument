<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutInfoInstrument.ctrl.php" method="get">
        <fieldset>
                <label for="nomArticle">Nom de l'article </label>
                <input type="text" name="nomArticle" required/>
                <label for="prix">Prix de l'article</label>
                <input type="number" name="prix" min="0" step="0.01" required/>
                <label for="familleInstrument">Famille de l'instrument : </label>
                <select name="familleInstrument" id="familleInstrument-select">
                    <option value="bois">Bois</option>
                    <option value="cuivre">Cuivre</option>
                    <option value="clavier">Clavier</option>
                    <option value="percussion">Percussion</option>
                    <option value="corde">Corde</option>
                </select>
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

            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>
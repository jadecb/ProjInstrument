<?php require("../view/header.php"); ?>

<main>

    <form action="t_ajoutInfoArticle.ctrl.php" method="get">
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
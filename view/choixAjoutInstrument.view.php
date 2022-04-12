<?php require("../view/header.php"); ?>

<main>

    <form action="t_choixAjoutInstrument.ctrl.php" method="get">
        <fieldset>
                <label for="instrument">Quel instrument à ajouter ?</label>
                <select name="instrument" id="instrument-select">
                    <?php foreach($allInstruments as $value): ?>
                        <option value="<?=$value?>"><?=$value?></option>
                    <?php endforeach; ?>
                </select>
            <input type="submit" value="ENVOYER">
        </fieldset>

    </form>
</main>

<?php require("../view/footer.php"); ?>


<option value="bois">Bois</option>
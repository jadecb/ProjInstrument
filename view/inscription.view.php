<?php require("../view/header.php"); ?>

<main>
    <form action="t_inscription.ctrl.php" method="get">
        <fieldset>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" required/>
        <label for="nom">Nom</label>
        <input type="text" name="nom" required/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" required/>
        <label for="dateNaissance">Date de naissance</label>
        <input type="date" name="dateNaissance" required/>
        <label for="mail">Mail</label>
        <input type="email" name="mail" required/>
        <label for="mdp">Mot de passe (8 caractères minimum)</label>
        <input type="password" name="mdp" minlength="8" required/>
        <input type="submit" value="INSCRIPTION">
        </fieldset>

        <p><a href="connect.ctrl.php">J'ai déjà un compte</a></p>

        <?php if(isset($mailExistant)) : ?>
        <p>Un client utilise déjà ce mail</p>
        <?php endif; ?>
    </form>
</main>

<?php require("../view/footer.php"); ?>
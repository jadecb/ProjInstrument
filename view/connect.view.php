<?php require("../view/header.php"); ?>

<main>

    <form action="t_connect.ctrl.php" method="get">
    <?php if(isset($nouvelementInscrit)) : ?>
        <p>Inscription bien enregistrée, vous pouvez vous connecter !</p>
    <?php endif; ?>
        <fieldset>
            <label for="mail">Mail</label>
            <input type="email" name="mail" required/>
            <label for="mdp">Mot de passe (8 characters minimum)</label>
            <input type="password" name="mdp" minlength="8" required/>
        
            <input type="submit" value="CONNEXION">
        </fieldset>
        <p><a href="inscription.ctrl.php">Je n'ai pas de compte</a></p>

        <?php if(isset($mauvaisId)) : ?>
        <p></br>Mauvais mail ou mot de passe</p>
        <?php endif; ?>

    </form>

</main>

<?php require("../view/footer.php"); ?>
<?php require("../view/header.php"); ?>

<main>
    <form action="t_connect.ctrl.php" method="get">
        <label for="mail">Mail : </label>
        <input type="email" name="mail" required/>
        <label for="mdp">Mot de passe (8 characters minimum) : </label>
        <input type="password" name="mdp" minlength="8" required/>
        
        <input type="submit" value="CONNECTION">
        <p><a href="inscription.ctrl.php">Je n'ai pas de compte</a></p>
    </form>
</main>

<?php require("../view/footer.php"); ?>
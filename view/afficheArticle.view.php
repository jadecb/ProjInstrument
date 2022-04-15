<?php require("../view/header.php"); ?>

<main id="afficheInstrument">
        <div>
            <img src="../images/<?=$tabInfosArticle['numArticle']?>.jpg">
            <div>
                <h2><?=$tabInfosArticle['nom']?></h2>
                <p>Prix : <?=$tabInfosArticle['prix']?> €</p>
            </div>
            <table>
                <?php foreach($InfoArticleAttributs as $attribut): ?>
                    <tr><td><?=ucfirst($attribut)?></td><td><?=$tabInfosArticle[$attribut]?>

                    <?php
                    if(in_array($attribut, array('longueur', 'largeur', 'hauteur'))):
                    ?>cm
                    <?php elseif($attribut=='prix'):?>
                        €
                    <?php elseif($attribut=='poids'):?>
                    gr
                    <?php endif;?>
                
                    
                    </td></tr>
                <?php endforeach; ?>
                <p><br> Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
            </table>
            <?php if(isset($prenom)): ?>
                <div id="panier"><a href="t_panier.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>"><img src="../images/panier.png" alt=""></a></div>
            <?php endif; ?>
            <?php if (isset($gestionnaire) && $gestionnaire==1): ?>
                <div id="edit"><a href="editerArticle.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>"><p>Editer l'article</p></a></div>
            <?php endif; ?>
        </div>
</main>

<?php require("../view/footer.php"); ?>

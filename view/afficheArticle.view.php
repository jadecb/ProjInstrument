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
            </table>
            <?php if(isset($prenom)): ?>
                <div id="panier"><a href="t_panier.ctrl.php?numArticle=<?=$tabInfosArticle['numArticle']?>"><img src="../images/panier.png" alt=""></a></div>
            <?php endif; ?>
            
        </div>
</main>

<?php require("../view/footer.php"); ?>

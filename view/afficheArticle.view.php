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
                    <?php endif;?>
                
                    
                    
                    </td></tr>
                <?php endforeach; ?>
            </table>
            <div id="panier">
                        <a href="#"><img src="../images/panier.png" alt=""></a>
                    </div>
        </div>
</main>

<?php require("../view/footer.php"); ?>

<?php require("../view/header.php"); 
$a = null;
?>

<main id="grostexte">

    <div id="mainpage">
    
    <section class="scroll-parent">
    <nav class="dots">
            <a href="#first" class="dot"></a>
            <a href="#second" class="dot"></a>
            <a href="#third" class="dot"></a>
    </nav>
        <!-- Enfant -->  
        <div id="first">
            <h2>Producteur d'instruments de musique depuis 2007</h2>
        </div>
        <!-- Enfant -->  
        <div id="second">
            <h2>Découvrez nos produits phares :</h2>
        </div> 
        <div id=third>
        <image class=positionImage>
        <?php for($i=0; $i<3; $i++): ?> <!-- "t_catalogueInstrument.ctrl.php?instrument=<?=$instrument?> !-->
        <figure>
            <a href="t_catalogueInstrument.ctrl.php?instrument=<?=$allInstruments[$i]?>">
                <img src="../images/<?=$allInstruments[$i]?>.jpg" alt="image catalogue">
            <figcaption>
                <?=$allInstruments[$i]?>
            </figcaption>
        </a></figure>
            <?php endfor; ?>
        </image>
        </div>
    </section>
    
    </div>
</main>

<?php require("../view/footer.php"); ?>
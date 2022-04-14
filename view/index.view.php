<?php require("../view/header.php"); 
$a = null;
?>

<main id="grostexte">
    <h1>
        Sibémol    
    </h1>
    <p>Producteur d'instruments de musique depuis 2007</p>
    <p>Découvrez nos produits phares :</p>
    <div  id="mainpage">
    <?php for($i=0; $i<3; $i++): ?> <!-- "t_catalogueInstrument.ctrl.php?instrument=<?=$instrument?> !-->
        <figure>
            <a href="t_catalogueInstrument.ctrl.php?instrument=<?=$allInstruments[$i]?>">
                <img src="../images/<?=$allInstruments[$i]?>.jpg" alt="image catalogue">
            <figcaption>
                <?=$allInstruments[$i]?>
            </figcaption>
            </a></figure>
    <?php endfor; ?>
    </div>
</main>

<?php require("../view/footer.php"); ?>
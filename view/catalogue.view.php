<?php require("../view/header.php"); ?>

<main id="catalogue">
    <section class="scroll-parent">
            <nav class="dots">
                    <a href="#first" class="dot"></a>
                    <a href="#second" class="dot"></a>
            </nav>
            <!-- Enfant -->  
    <div id="second">
        <a href="t_catalogue.ctrl.php?choix=instrument">
            <img src="../images/instruments.jpg">
            
            <h2>
                        Instruments de musique
            </h2>
        </a>
    </div>
    <!-- Enfant -->  
        <div id="first">
                <a href="t_catalogue.ctrl.php?choix=accessoire">
                    <img src="../images/accessoire.jpg">
                    
                    <h2>
                        Accessoires
                    </h2>
                </a>
        </div>
</section>
</main>


<?php require("../view/footer.php"); ?>

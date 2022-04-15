<?php require("../view/header.php"); ?>

<main id="catalogue">
    <section class="scroll-parent">
        <nav class="dots">
                <a href="#first" class="dot"></a>
                <a href="#second" class="dot"></a>
        </nav>
            <!-- Enfant -->  
            <div id="second">
                <figure>
                <a href="t_catalogue.ctrl.php?choix=instrument">
                    <img src="../images/instruments.jpg">
                    
                    <figcaption>
                        Instruments de musique
                    </figcaption>
                </a>
                </figure>
            </div> 
            <!-- Enfant -->  
            <div id="first">
                <figure>
                <a href="t_catalogue.ctrl.php?choix=accessoire">
                    <img src="../images/accessoire.jpg">
                    
                    <figcaption>
                        Accessoires
                    </figcaption>
                </a>
                </figure>
            </div>
    </section>
</main>


<?php require("../view/footer.php"); ?>
<?php
$familleInstrument = array("Corde","Bois","Cuivre","Clavier","Percussion");
$typeInstrument_Corde = array("Guitare", "Violon", "Banjo", "Luth", "Harpe");
$typeInstrument_Bois = array("Accordeon", "Flute", "Harmonica", "Saxophone");
$typeInstrument_Cuivre = array("Tuba", "Trombone", "Trompette");
$typeInstrument_Clavier = array("Piano", "Synthetiseur");
$typeInstrument_Percussion = array("Batterie", "Maracasse", "Triangle", "Djembll
")
for($i = 1; $i <= 100; $i++){
	echo $i."|".$familleInstrument[$i%5]."|".."||||||||||||||||||||\n";
}
?>

<?php

abstract class infoInstrument extends infoArticle{
    private string $materiauxPrincipal;
    private string $couleur;
    private int $largeur;
    private int $longueur;
    private int $hauteur;
    private string $familleInstrument;

    function __construct(int $numArticle, string $nom, int $prix, string $materiauxPrincipal='', string $couleur='', int $largeur=0,
    int $longueur=0, int $hauteur=0, string $familleInstrument='') {
        parent::__construct($numArticle, $nom, $prix);
        $this->materiauxPrincipal = $materiauxPrincipal;
        $this->couleur = $couleur;
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
        $this->familleInstrument = $familleInstrument;

    }


}

?>
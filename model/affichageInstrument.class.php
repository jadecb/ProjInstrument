<?php

class infoInstrument extends infoArticle{

   private int $numArticle;
   private String $materiauxPrincipal;
   private String $couleur;
   private int $largeur;
   private int $longeur;
   private int $hauteur;


    function __construct(int $numArticle=0, string $materiauxPrincipal='', string $couleur='',
    int $largeur=0, int $longueur=0, int $hauteur=0)

    {
            parent::__construct($numArticle, $nomArticle, $prix);

            $this->numArticle = $numArticle;
            $this->materiauxPrincipal = $materiauxPrincipal;


        }
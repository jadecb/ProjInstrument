<?php



abstract class infoArticle{

    private int $numArticle;
    private string $nom;
    private int $prix;

    function __construct(int $numArticle, string $nom, int $prix){
        $this->numArticle = $numArticle;
        $this->nom = $nom;
        $this->prix = $prix;
    }


}







?>
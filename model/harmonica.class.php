<?php

class Harmonica extends infoInstrument{
    private int $nbrTrou;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', 
    int $largeur=0, int $longueur=0, int $hauteur=0, string $familleInstrument='', 
    int $nbrTrou=0)
    
    {
        parent::__construct($numArticle, $nom, $prix, $materiauxPrincipal,
        $couleur, $largeur, $longueur, $hauteur, $familleInstrument);

        $this->nbrTrou = $nbrTrou;
    }

    public function __get(string $name){
        if(isset($this->$name) && !empty($this->$name)){
            return $this->$name;
        }
        else{
            return NULL;
        }
    }

}



?>
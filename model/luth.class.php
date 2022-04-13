<?php

class Luth extends infoInstrument{
    private int $nbrCordes;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', 
    int $largeur=0, int $longueur=0, int $hauteur=0, int $nbrCorde=0)
    
    {
        parent::__construct($numArticle, $nom, $prix, $materiauxPrincipal,
        $couleur, $largeur, $longueur, $hauteur);

        $this->nbrCorde = $nbrCorde;
    }

    public function __get(string $name){
        if(isset($this->$name) && !empty($this->$name)){
            return $this->$name;
        }
        else{
            return NULL;
        }
    }

    public function __set(string $name, mixed $value): void{
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }

}



?>
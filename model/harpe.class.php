<?php

class Harpe extends infoInstrument{
    private String $type;
    private int $nbrCordes;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', 
    int $largeur=0, int $longueur=0, int $hauteur=0, string $type='', int $nbrCorde=0)
    
    {
        parent::__construct($numArticle, $nom, $prix, $materiauxPrincipal,
        $couleur, $largeur, $longueur, $hauteur);

        $this->type = $type;
        $this->nbrCordes = $nbrCorde;

    }

    public function __get(string $name){
        if(isset($this->$name) && !empty($this->$name)){
            return $this->$name;
        }
        else{
            return NULL;
        }
    }

    public function __set(string $name, $value): void{
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }

}



?>
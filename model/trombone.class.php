<?php

class Trombone extends infoInstrument{
    private string $type;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', 
    int $largeur=0, int $longueur=0, int $hauteur=0, string $familleInstrument='', 
    string $type='')
    
    {
        parent::__construct($numArticle, $nom, $prix, $materiauxPrincipal,
        $couleur, $largeur, $longueur, $hauteur, $familleInstrument);

        $this->type = $type;
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
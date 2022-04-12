<?php

class Piano extends infoInstrument{
    private string $materiauxTouche;
    private int $nbrTouche;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', 
    int $largeur=0, int $longueur=0, int $hauteur=0, string $familleInstrument='', 
    string $materiauxTouche='', int $nbrTouche=0)

    {
        parent::__construct($numArticle, $nom, $prix, $materiauxPrincipal,
        $couleur, $largeur, $longueur, $hauteur, $familleInstrument);

        $this->materiauxTouche = $materiauxTouche;
        $this->nbrTouche = $nbrTouche;
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
<?php

abstract class infoInstrument extends infoArticle{
    
    protected string $materiauxPrincipal;
    protected string $couleur;
    protected int $largeur;
    protected int $longueur;
    protected int $hauteur;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $materiauxPrincipal='', string $couleur='', int $largeur=0,
    int $longueur=0, int $hauteur=0) {
        parent::__construct($numArticle, $nom, $prix);
        $this->materiauxPrincipal = $materiauxPrincipal;
        $this->couleur = $couleur;
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
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
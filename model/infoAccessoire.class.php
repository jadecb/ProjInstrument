<?php

class infoAccessoire extends infoArticle{

    private string $fournisseur;
    private string $marque;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $fournisseur='', string $marque=''){
        parent::construct($numArticle, $nom, $prix);
        $this->fournisseur = $fournisseur;
        $this->marque = $marque;
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
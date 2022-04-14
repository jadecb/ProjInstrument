<?php

class Accessoire extends infoArticle{

    private string $fournisseur;
    private string $materiau;
    private string $marque;
    private string $typeAcc;

    function __construct(int $numArticle=0, string $nom='', int $prix=0, string $fournisseur='', string $materiau='',
    string $marque='',string $typeAcc=''){
        parent::__construct($numArticle, $nom, $prix);
        $this->fournisseur = $fournisseur;
        $this->materiau = $materiau;
        $this->marque = $marque;
        $this->typeAcc = $typeAcc;
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
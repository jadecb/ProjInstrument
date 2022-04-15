<?php

abstract class infoArticle{

    protected int $numArticle;
    protected string $nomArticle;
    protected float $prix;

    function __construct(int $numArticle=0, string $nom='', float $prix=0){
        $this->numArticle = $numArticle;
        $this->nomArticle = $nom;
        $this->prix = $prix;
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
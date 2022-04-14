<?php

// Description d'un client
class Panier{
    private int $numClient;
    private int $numArticle;

    function __construct(int $numClient=0, int $numArticle=0){
        $this->numClient = $numClient;
        $this->numArticle = $numArticle;
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
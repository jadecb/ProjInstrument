<?php



abstract class infoArticle{

    private int $numArticle;
    private string $nom;
    private int $prix;

    function __construct(int $numArticle=0, string $nom='', int $prix=0){
        $this->numArticle = $numArticle;
        $this->nom = $nom;
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
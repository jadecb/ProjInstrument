<?php

function getDAO(){
    static $DAO = NULL;
    if($DAO == NULL){
        try {
            $database = 'sqlite:'.dirname(__FILE__).'/../data/Sibemol.db';
            $DAO = new PDO($database, '', '');
        } catch (PDOExeception $e) {
            die("Echec lors de la connexion : ".$e->getMessage());
        }
    }
    return $DAO;
}

?>
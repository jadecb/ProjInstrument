<?php

require_once(dirname(__FILE__.'/client.class.php'));

// Data Access Object pour Client
class ClientDAO{
function __construct() {
 try {
 $this->db = new PDO('sqlite:data/Sibemol.db');
 if (!$this->db) { die ("Database error"); }
 } catch (PDOException $e) {
 die("PDO Error :".$e->getMessage()."$this->database\n");
    }
  }
}

?>
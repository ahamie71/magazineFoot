<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
     
    $bdd= new Database();
    
    $stmt = $this->getPdo()->prepare("SELECT * FROM video WHERE videoId = ?");
       
   }  

}
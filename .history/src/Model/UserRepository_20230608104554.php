<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
     
    $bdd= new Database();
    
    
    
    $stmt = $tgetPDO()->prepare("SELECT * FROM User WHERE username= :username");
       
   }  

}
<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
    $bdd= new Database();
    $stmt = $bdd->getPDO()->prepare("SELECT * FROM User WHERE username= :username");
    $stmt->execute();
    return $stmt->fetchAll();

       
   }  

}
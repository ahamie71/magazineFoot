<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
     
    $bdd = new Database();
    $bdd->getPDO();
    $req= "SELECT * FROM User WHERE username = :username and password = :password"


   }  

}
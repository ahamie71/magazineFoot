<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
     
    $bdd = new Database();
    $bdd->getPDO();
    $req= "SELECT * FROM User WHERE username = :username and password = :password";
    $statement = $pdo->prepare($query);

        // Liaison des valeurs aux paramètres de la requête
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);



   }  

}
<?php

use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
     
    
    $stmt = $this->getPdo()->prepare("SELECT * FROM video WHERE videoId = ?");
        $stmt->execute([$videoId]);
        return $stmt->fetch(\PDO::FETCH_OBJ);

   }  

}
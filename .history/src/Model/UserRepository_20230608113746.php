<?php
namespace Foot\Model;
use Foot\Entity\Database;
use Foot\Entity\User;

class UserRepository
{
    private $db;

   public function findUser(){
    
    $bdd= new Database();
    $stmt = $bdd->getPDO()->prepare("SELECT * FROM User WHERE username= :username");
    $stmt->bindValue(':username', $username);
     $stmt->execute();
    var_dump(get_class($stmt));
    die('helo no');
    

 

       
   }  

}
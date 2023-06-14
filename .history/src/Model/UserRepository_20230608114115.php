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
   
    $stmt->bindValue(':username','Ali');
    $stmt->execute();
    $result= $stmt->fetchAll();
    
    var_dump($result);
    die('helo no');
    

 

       
   }  

}
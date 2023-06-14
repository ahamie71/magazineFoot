<?php
namespace Foot\Model;
use Foot\Entity\Database;

use PDO;

class UserRepository
{
    private $db;

    public function findUser($username) {
        $bdd = new Database();
        $stmt = $bdd->getPDO()->prepare("SELECT * FROM User WHERE username = :username");
        $stmt->bindValue(':username',$username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_Clas);
        return $result;
    }
    

  
 
    

 

       
   }  

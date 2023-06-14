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
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Entit');
        $stmt->bindValue(':username',$username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    

  
 
    

 

       
   }  


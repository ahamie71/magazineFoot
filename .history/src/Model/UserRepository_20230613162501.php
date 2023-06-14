<?php
namespace Foot\Model;
use Foot\Entity\Database;
use PDO;

class UserRepository
{
    private $db;

    public function findUser($username){
        $bdd = new Database();
        $stmt = $bdd->getPDO()->prepare("SELECT * FROM User WHERE username = :username");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Foot\Entity\User');
        $stmt->bindValue(':username',$username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }  
    
    public function AddUser(  $username,  $password, $email):strin{
         
        $bdd = new Database();
         $req = $bdd->getPDO()->prepare("INSERT INTO User (username,email,password,) VALUES (:username,:email,:password,:role)");
        $req->execute(
        array(
            ':username' => $username,
            ':password' => $password, 
            ':email' => $email
        )
    );
        


    }


   }                           


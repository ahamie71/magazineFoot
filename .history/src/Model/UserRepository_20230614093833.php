<?php
namespace Foot\Model;
use PDO;
use Foot\Entity\User;
use Foot\Entity\Database;

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
    
    public function addUser($username, $password, $email)
    {
        $bdd = new Database();
        $req = $bdd->getPDO()->prepare("INSERT INTO User (username,email,password,) VALUES (:username,:email,:password,)");
        $req->execute(
        array(
            ':username' => $username,
            ':password' => $password, 
            ':email' => $email
        )
    );
        


    }


   }                           


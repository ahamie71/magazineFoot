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
    
    public function AddUser($username, $password,$email){
         
        $bdd = new Database();
         $req = $con->prepare("INSERT INTO users (username,Email,password,role) VALUES (:prenom,:Email,:password,:role)");
    $req->execute(
        array(
            ':username' => $username,
            ':password' => $password, 
            ':Email' => $email
        )
    );
        


    }


   }                           


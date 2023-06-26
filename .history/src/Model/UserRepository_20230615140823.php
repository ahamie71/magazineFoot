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
        $stmt->setFetchMode(PDO 'Foot\Entity\User');
        $stmt->bindValue(':username',$username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }  
    
    public function addUser($username, $pass, $email,$admin)
    {
        $bdd = new Database();
        $req = $bdd->getPDO()->prepare("INSERT INTO User (username,email,password,admin) VALUES(:username,:email,:password,:Admin)");
        $req->execute(
        array(
            ':username' => $username,
            ':password' => $pass,
            ':email' => $email,
            ':Admin' => $admin
        )   
    );
        


    }


   }                           


<?php

namespace Foot\Entity;

use PDO;



class Database
{

  private $host = "localhost";
  private $db_name = "MagazineFoot";
  private $username = "root";
  private $password = "root";
  private $pdo;


  public function __construct($db_name, $username = 'root', $password = 'root', $host = 'localhost')
  {

    $this->$db_name = $db_name;
    $this->$username = $username;
    $this->$password = $password;
    $this->$host = $host;
  }


     private function getPDO(){

      if($this->pdo==null){

        $pdo= new PDO('mysql:dbname=MagazineFoot;host=localhost','root','root'); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;

      }
      return $this->pdo;
     }
 
     public function  query($statement){

      $req =$this->getPDO()->query($statement);
      $datas= $req->fetchAll(PDO::FETCH_OBJ);
     }
}
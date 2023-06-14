<?php

namespace Foot\Entity;
use PDO;



class Database {
  
    private $host = "localhost";
    private $db_name = "MagazineFoot";
    private $username = "root";
    private $password = "root";
    private $pdo;
     
  
    public function __construct($db_name,$username='root',$password='root',$host='localhost'){
      
      $this->$db_name = $db_name;
      $this->$username = $username;
      $this->$password = $password;
      $this->$host = $host;


    }

    public function getPDO(): PDO

    {
        if($this->pdo==null){
           new PDO("mysql:db");

        }
        return $this->pdo;
    }
  }
  
  
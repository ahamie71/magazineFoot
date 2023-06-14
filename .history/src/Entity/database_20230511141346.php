<?php

namespace Foot\Entity;
use PDO;
use PDOException;


class Database {
  
    private $host = "localhost";
    private $db_name = "MagazineFoot";
    private $username = "root";
    private $password = "root";
    private $conn;
    // pour stocker l'objet de connection a la base de données 
  
    public function __construct($db_name,$username='root',$password='root',$host='localhost'){
      
      $this->$db_name = $db_name;
      $this->$username = $username;
      $this->$password = $password;
      $this->$host = $host;


    }
  }
  
  
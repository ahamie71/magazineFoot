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
  
    public function getConnection() {
      $this->conn = null;
  
      try {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
  
      return $this->conn;
    }
  }
  
  
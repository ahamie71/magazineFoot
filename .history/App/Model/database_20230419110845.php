<?php
class Database {
    private $host = "localhost";
    private $db_name = "mydatabase";
    private $username = "myusername";
    private $password = "mypassword";
    private $conn;
  
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
  
  // Création d'un objet de la classe Database
  $database = new Database();
  
  // Obtention de la connexion à la base de données
  $conn = $database->getConnection();
  
  // Utilisation de la connexion pour exécuter une requête
  $stmt = $conn->query("SELECT * FROM mytable");
  
  // Boucle à travers les résultats de la requête
  while ($row = $stmt->fetch()) {
    echo $row['column1'] . " - " . $row['column2'] . "<br>";
  }
  
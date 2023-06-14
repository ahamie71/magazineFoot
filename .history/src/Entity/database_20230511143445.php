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

  Il s'agit de ce qu'on appelle les ternaires. Un ternaire est une condition condensée qui fait deux choses sur une seule ligne : on teste la valeur d'une variable dans une condition ; on affecte une valeur à une variable selon que la condition est vraie ou non.

  public function getPDO(): PDO
  {
    return $this->pdo ?? $this->pdo = new PDO("mysql:db_name={$this->db_name};host={$this->host}", $this->username, $this->password);

  }

}
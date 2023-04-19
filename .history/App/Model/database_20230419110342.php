<?php

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;

    private $db_host;

    private $pdo;


    // le constructeur est une  methode special d'une classe , qui erst appelée automatiquement lorsq'un objet de cette classe est crée 
    public function __construct($db_name= 'MagazineFoot', $db_user = 'root', $db_pass = 'root', $db_host = 'localhost')
    {

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;


    }

    public function Connect
}
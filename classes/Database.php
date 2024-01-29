<?php

class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Cannot connect to database: " . $this->conn->connect_error);
        } else {
            // echo "Database connected successfully....";
            return $this->conn;
        }
    }
}

// $db = new Database();

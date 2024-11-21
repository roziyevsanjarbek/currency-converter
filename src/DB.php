<?php

class DB
{
    public $host="localhost";
    public $user="root";
    public $pass="qwert";

    public $db_name="currency_converter";
    public $conn;
    public function __construct(){
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->pass);
    }

}
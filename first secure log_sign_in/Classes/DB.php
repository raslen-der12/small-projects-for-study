<?php

class CNX{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "library";
    

    protected function connect(){
        try {
            $pdo= new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("connection failed:".$e->getMessage());
        }
    }


}





<?php

/**
 * Class Repository
 */

class Repository
{
    private $pdo;
    private $safariDB = "safari";
    private $mysqlHost = "localhost";
    private $safariLogin = "safari";
    private $credential="";

    public function __construct()
    {
        $this->setupConnection();
    }

    private function setupConnection(){
        try{
             $this->pdo = new PDO("mysql:host=". $this->mysqlHost . ";dbname=" . $this->safariDB . ";", $this->safariLogin, $this->credential);
        }catch (PDOException $ex){
            die("Failed to connect to database ". $ex->getMessage());
        }

    }

}
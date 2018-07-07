<?php

namespace didinka;
use \PDO;

class DbConnection
{

    private $servername;
    private $username;
    private $password;
    private $port;
    private $dbName;

    public function __construct()
    {
        $this->password = "secret";
        $this->servername = "127.0.0.1";
        $this->username = "homestead";
        $this->port = "3306";
        $this->dbName = "php";
    }


    public function testConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=$this->dbName", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function connWithMysli(){
        $conn = mysqli_connect($this->servername, $this->username, $this->password);

// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }


}




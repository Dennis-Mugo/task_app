<?php

// create the db connection
require_once '..\vendor\autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class MysqliConnection
{
    private $con;
    public function __construct()
    {
        $this->con = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }
    public function getConnection()
    {
        return $this->con;
    }
}

$con = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
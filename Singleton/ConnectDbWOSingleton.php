<?php

// Connect db without a singleton.
class ConnectDbWOSingleton {
  private $conn;
  
  private $host = 'localhost';
  private $user = 'db user-name';
  private $pass = 'db password';
  private $name = 'db name';
   
  // Public constructor.
  public function __construct()
  {
    $this->conn = new PDO("mysql:host={$this->host};
      dbname={$this->name}", $this->user,$this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  }
   
  public function getConnection()
  {
    return $this->conn;
  }
}
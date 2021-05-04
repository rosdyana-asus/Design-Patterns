<?php

// Connect db without a singleton.
class ConnectDbWOSingleton {
  private $conn;
   
  // Public constructor.
  public function __construct($host, $user, $pass, $name)
  {
    $this->conn = new PDO("mysql:host={$host};
      dbname={$name}", $user, $pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  }
   
  public function getConnection()
  {
    return $this->conn;
  }
}
<?php

class Database {
  private $dbId = "mysql:host=localhost; dbname=rpl_project";
  private $dbUsername = "root";
  private $dbPassword = "";

  function __construct() {
    $pdo = new PDO($this->dbId, $this->dbUsername, $this->dbPassword);
  }

}
<?php

class DatabaseModel {
  
  private $dbId = "mysql:host=localhost; dbname=rpl_project";
  private $dbUsername = "root";
  private $dbPassword = "";

  function pdo() {
    return new PDO($this->dbId, $this->dbUsername, $this->dbPassword);
  }

  function getUserData($username) {
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $this->pdo()->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
  }

  function getUserDataById($userId) {
    $query = "SELECT * FROM users WHERE userId=?";
    $stmt = $this->pdo()->prepare($query);
    $stmt->execute([$userId]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
  }
  
}
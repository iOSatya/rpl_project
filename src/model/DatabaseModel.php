<?php

class DatabaseModel {
  private $dbId = "mysql:host=localhost; dbname=rpl_project";
  private $dbUsername = "root";
  private $dbPassword = "";

  function pdo() {
    return new PDO($this->dbId, $this->dbUsername, $this->dbPassword);
  }

  function getUserId($username) {
    $query = "SELECT userId FROM users WHERE username=?;";
    $stmt = $this->pdo()->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["userId"];
  }

  function getTeacherId($userId) {
    $query = "SELECT teacherId FROM teachers WHERE userId=?;";
    $stmt = $this->pdo()->prepare($query);
    $stmt->execute([$userId]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["teacherId"];
  }
  
}
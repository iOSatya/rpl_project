<?php

class SignupModel extends DatabaseModel {

  private $pdo = null;

  function __construct() {
    $this->pdo = parent::pdo();
  }

  function signupUser($username, $userFullName, $userPassword, $userStatus) {

    $query = "INSERT INTO users (username, userFullName, userPassword, userStatus) VALUES (?, ?, ?, ?);";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$username, $userFullName, $userPassword, $userStatus]);

    $userId = parent::getUserData($username)["userId"];

    if ($userStatus === "student") {
      $query = "INSERT INTO students (userId) VALUES (?);";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute([$userId]);
    } else if ($userStatus === "teacher") {
      $query = "INSERT INTO teachers (userId) VALUES (?);";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute([$userId]);
    }
    
  }

  function getUsername($username) {
    $query = "SELECT username FROM users WHERE username=?;";
    $stmt = $this->pdo()->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["username"];
  }

}
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

    $userId = parent::getUserId($username);

    if ($userStatus === "student") {
      $query = "INSERT INTO students (userId) VALUES (?);";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute([$userId]);
    }
    
  }

}
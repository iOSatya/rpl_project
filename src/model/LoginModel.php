<?php

class LoginModel extends DatabaseModel {

  private $pdo = null;

  function __construct() {
    $this->pdo = parent::pdo();
  }

  function authenticateUser($username, $userPassword) {
    $query = "SELECT username FROM users WHERE username=? AND userPassword=?;";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$username, $userPassword]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["username"];
  }

}
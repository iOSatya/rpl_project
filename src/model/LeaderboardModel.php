<?php

class LeaderboardModel extends DatabaseModel {

  private $pdo = null;

  function __construct() {
    $this->pdo = parent::pdo();
  }

  function getRanking() {
    $query = "SELECT * FROM students ORDER BY highScore DESC LIMIT 10;";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
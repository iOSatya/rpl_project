<?php

class MapModel extends DatabaseModel {
  private $pdo = null;

  function __construct() {
    $this->pdo = parent::pdo();
  }

  function getAssignment($assignmentLevel) {
    $query = "SELECT * FROM assignments WHERE assignmentLevel=? ORDER BY RAND() LIMIT 1;";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$assignmentLevel]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

}
<?php

class CreateAssignmentModel extends DatabaseModel {
  
  private $pdo = null;

  function __construct() {
    $this->pdo = parent::pdo();
  }

  function inputAssignment($teacherId, $question, $answerA, $answerB, $answerC, $answerD, $correctAnswer, $assignmentLevel) {
    $query = "INSERT INTO assignments(teacherId, question, answerA, answerB, answerC, answerD, correctAnswer, assignmentLevel) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$teacherId, $question, $answerA, $answerB, $answerC, $answerD, $correctAnswer, $assignmentLevel]);
  }
  
}
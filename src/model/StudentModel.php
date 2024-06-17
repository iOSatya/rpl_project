<?php

class StudentModel {

  static function getStudentId($userId) {
    $DatabaseModel = new DatabaseModel();
    $pdo = $DatabaseModel->pdo();

    $query = "SELECT studentId FROM students WHERE userId=?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$userId]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["studentId"];
  }

  static function getMapLevel($studentId) {
    $DatabaseModel = new DatabaseModel();
    $pdo = $DatabaseModel->pdo();

    $query = "SELECT mapLevel FROM students WHERE studentId=?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$studentId]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["mapLevel"];
  }

  static function updateMapLevel($mapLevel, $studentId) {
    $DatabaseModel = new DatabaseModel();
    $pdo = $DatabaseModel->pdo();

    $query = "UPDATE students SET mapLevel=? WHERE studentId=?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$mapLevel, $studentId]);

  }

}
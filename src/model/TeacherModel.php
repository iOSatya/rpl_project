<?php

class TeacherModel {

  static function getTeacherId($userId) {

    $DatabaseModel = new DatabaseModel();
    $pdo = $DatabaseModel->pdo();

    $query = "SELECT teacherId FROM teachers WHERE userId=?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$userId]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["teacherId"];

  }

}
<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/StudentModel.php";
require_once "../model/MapModel.php";

class MapController {

  static function handlePost() {
    try {
      $assignmentId = $_POST["assignmentId"];
      $userAnswer = $_POST["userAnswer"];
      $mapRegion = $_POST["mapRegion"];
    
      $model = new MapModel();
      $assignment = $model->getAssignmentById($assignmentId);
      $mapLevel = StudentModel::getMapLevel($_SESSION["studentId"]);
    
      // Change HP After Answering
      if ($userAnswer == $assignment["correctAnswer"]) {
        $_SESSION["bossHp"] -= 20;
      } else {
        $_SESSION["playerHp"] -= 20;
      }
    
      // Action After HP Reach 0
      if ($_SESSION["playerHp"] <= 0) {
        unset($_SESSION["playerHp"]);
        unset($_SESSION["bossHp"]);
        header("Location: ../view/Students/MapView.php");
        die();
      } else if ($_SESSION["bossHp"] <= 0) {
        
        // Increase Map Level
        if ($assignment["assignmentLevel"] == $mapLevel) {
          $nextLevel = intval($assignment["assignmentLevel"]) + 1;
          StudentModel::updateMapLevel($nextLevel, $_SESSION["studentId"]);
        }
    
        unset($_SESSION["playerHp"]);
        unset($_SESSION["bossHp"]);
        header("Location: ../view/Students/MapView.php");
        die();
      }
      
      header("Location: ../view/Students/" . $mapRegion . "View.php");
    } catch (PDOException $e) {
      echo $e->getMessage();
      die();
    }
  }

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  MapController::handlePost();
} else {
  header("Location: ../view/Students/MapView.php");
  die();
}
<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/TeacherModel.php";
require_once "../model/CreateAssignmentModel.php";

class CreateAssignmentController {

  static function handlePost() {
    $question = $_POST["question"];
    $answerA = $_POST["answerA"];
    $answerB = $_POST["answerB"];
    $answerC = $_POST["answerC"];
    $answerD = $_POST["answerD"];
    $correctAnswer = $_POST["correctAnswer"];
    $assignmentLevel = $_POST["assignmentLevel"];
  
    $model = new CreateAssignmentModel();
  
    if (!$question || !$answerA || !$answerB || !$answerC || !$answerD || $correctAnswer == "0" || $assignmentLevel == "0") {
      $_SESSION["errorMessage"] = "Field Must not Empty!";
      header("Location: ./../view/Teachers/CreateAssignmentView.php");
      die();
    } else {
      $model->inputAssignment($_SESSION["teacherId"], $question, $answerA, $answerB, $answerC, $answerD, $correctAnswer, $assignmentLevel);
      header("Location: ./../view/Teachers/CreateAssignmentView.php");
      die();
    }
  }

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  CreateAssignmentController::handlePost();
} else {
  header("Location: ./../view/Teachers/CreateAssignmentView.php");
  die();
}
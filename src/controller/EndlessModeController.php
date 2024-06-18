<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/StudentModel.php";
require_once "../model/MapModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $assignmentId = $_POST["assignmentId"];
  $userAnswer = $_POST["userAnswer"];

  $model = new MapModel();
  $assignment = $model->getAssignmentById($assignmentId);

  if ($userAnswer == $assignment["correctAnswer"]) {
    $_SESSION["highScore"] += 20;
  } else {
    $_SESSION["playerHp"] -= 20;
  }

  if ($_SESSION["playerHp"] <= 0) {

    

    unset($_SESSION["playerHp"]);
    unset($_SESSION["highScore"]);
    header("Location: ../view/Students/MapView.php");
    die();
  }

  header("Location: ../view/Students/EndlessModeView.php");
  die();
}
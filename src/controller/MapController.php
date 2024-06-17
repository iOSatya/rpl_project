<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/MapModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $assignmentId = $_POST["assignmentId"];
  $userAnswer = $_POST["userAnswer"];
  $mapRegion = $_POST["mapRegion"];

  $model = new MapModel();
  $assignment = $model->getAssignmentById($assignmentId);

  if ($userAnswer == $assignment["correctAnswer"]) {
    $_SESSION["bossHp"] -= 20;
  } else {
    $_SESSION["playerHp"] -= 20;
  }

  if ($_SESSION["playerHp"] <= 0) {
    unset($_SESSION["playerHp"]);
    unset($_SESSION["bossHp"]);
    header("Location: ../view/Students/MapView.php");
    die();
  } else if ($_SESSION["bossHp"] <= 0) {
    unset($_SESSION["playerHp"]);
    unset($_SESSION["bossHp"]);
    header("Location: ../view/Students/MapView.php");
    die();
  }

  header("Location: ../view/Students/" . $mapRegion . "View.php");

} else {
  header("Location: ../view/Students/MapView.php");
  die();
}
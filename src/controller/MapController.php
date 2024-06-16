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
    echo "Your answer is correct!";
  } else {
    echo "Your answer is wrong!";
  }

} else {
  header("Location: ../view/MapView.php");
  die();
}
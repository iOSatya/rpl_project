<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  try {
    $username = $_POST["username"];
    $userFullName = $_POST["userFullName"];
  
    $model = new DatabaseModel();
    $model->updateUserData($username, $userFullName, $_SESSION["userId"]);
  
    header("Location: ./../view/Students/ProfileView.php");
    die();
  } catch(PDOException $e) {
    echo $e->getMessage();
    die();
  }
  
} else {
  header("Location: ./../view/Students/ProfileView.php");
  die();
}
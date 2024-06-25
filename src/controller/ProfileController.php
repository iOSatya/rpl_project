<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";

class ProfileController {
  
  static function handlePost() {
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
  }

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  ProfileController::handlePost();
} else {
  header("Location: ./../view/Students/ProfileView.php");
  die();
}
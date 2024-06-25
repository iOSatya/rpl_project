<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/SignupModel.php";

class SignupController {
  static function handlePost() {
    try {
      $username = $_POST["username"];
      $userFullName = $_POST["userFullName"];
      $userPassword = $_POST["userPassword"];
      $userStatus = $_POST["userStatus"];
    
      $model = new SignupModel();
  
      if (!$username || !$userPassword || !$userFullName) {
        $_SESSION["errorMessage"] = "Field Must not Empty!";
        header("Location: ../view/SignupView.php");
        die();
      } else {
        $checkUsername = $model->getUsername($username);
      }
  
      if ($checkUsername === $username) {
        $_SESSION["errorMessage"] = "Username Already Exist!";
        header("Location: ../view/SignupView.php");
        die();
      } else {
        $model->signupUser($username, $userFullName, $userPassword, $userStatus);
        header("Location: ../view/LoginView.php");
        die();
      }
  
    } catch (PDOException $e) {
      echo $e->getMessage();
      die();
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  SignupController::handlePost();
} else {
  header("Location: ../view/SignupView.php");
  die();
}
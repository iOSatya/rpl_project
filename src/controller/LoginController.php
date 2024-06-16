<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/LoginModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  try {
    $username = $_POST["username"];
    $userPassword = $_POST["userPassword"];

    $model = new LoginModel();
  
    if (!$username || !$userPassword) {

      $_SESSION["errorMessage"] = "Field Must not Empty!";
      header("Location: ../view/LoginView.php");
      die();

    } else {

      if ($model->authenticateUser($username, $userPassword)) {
        $_SESSION["userData"] = $model->getUserData($username);
        if ($_SESSION["userData"]["userStatus"] === "student") {
          header("Location: ../view/Students/HomeView.php");
          die();
        } else if ($_SESSION["userData"]["userStatus"] === "teacher") {
          header("Location: ../view/Teachers/HomeView.php");
          die();
        }
      } else {
        $_SESSION["errorMessage"] = "Wrong Username/Password!";
        header("Location: ../view/LoginView.php");
        die();
      }
      
    }

  } catch (PDOException $e) {
    echo $e->getMessage();
    die();
  }

} else {
  header("Location: ../view/LoginView.php");
  die();
}
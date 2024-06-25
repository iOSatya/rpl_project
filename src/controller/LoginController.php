<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";
require_once "../model/TeacherModel.php";
require_once "../model/StudentModel.php";
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
        $userData = $model->getUserData($username);
        $_SESSION["userId"] = $userData["userId"];
        if ($userData["userStatus"] === "student") {
          $_SESSION["studentId"] = StudentModel::getStudentId($userData["userId"]);
          header("Location: ../view/Students/HomeView.php");
          die();
        } else if ($userData["userStatus"] === "teacher") {
          $_SESSION["teacherId"] = TeacherModel::getTeacherId($userData["userId"]);
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
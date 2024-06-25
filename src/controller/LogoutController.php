<?php

require_once "./../config/config.php";


class LogoutController {
  static function logout() {
    session_unset();
    session_destroy();
    header("Location: ./../view/LoginView.php");
  }
}

LogoutController::logout();
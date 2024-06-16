<?php

require_once "../config/config.php";
require_once "../model/DatabaseModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

} else {
  header("Location: ../view/LoginView.php");
  die();
}
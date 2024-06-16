<?php

require_once "./../config/config.php";

session_unset();
session_destroy();

header("Location: ./../view/LoginView.php");
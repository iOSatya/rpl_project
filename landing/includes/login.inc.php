<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "controller/Login.control.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $data = new LoginControl($email, $pwd);
    $_SESSION["loginMessage"] = "";

    if ($data->isError() == true) {
        $_SESSION["loginMessage"] = "<p class='mb-2 text-danger'>" . $data->errorMessage . "</p>";
        header("Location: ../login.php");
        die();
    } else {
        echo "Login Success!";
    }

} else {
    header("Location: ../login.php");
    die();
}
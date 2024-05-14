<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "controller/Signup.control.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirmPwd = $_POST["confirmPwd"];
    $playerStatus = $_POST["playerStatus"];

    $data = new SignupControl($email, $pwd, $confirmPwd, $playerStatus);
    $_SESSION["signupMessage"] = "";

    if ($data->isError() == true) {
        $_SESSION["signupMessage"] = "<p class='mb-2 text-danger'>" . $data->errorMessage . "</p>";
        header("Location: ../signup.php");
        die();
    } else {
        $data->signupPlayer();
        $_SESSION["signupMessage"] = "<p class='mb-2 text-success'>Signup Success!</p>";
        header("Location: ../signup.php");
        die();
    }

} else {
    header("Location: ../signup.php");
    die();
}
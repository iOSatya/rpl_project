<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "controller/Login.control.php";
require_once BASE_URL . "model/Player.model.php";

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
        $_SESSION["playerData"] = serialize(new PlayerModel($email));
        header("Location: ../home.php");
        die();
    }

} else {
    header("Location: ../login.php");
    die();
}
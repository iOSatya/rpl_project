<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/controller/Session.control.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/model/Database.model.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/model/Login.model.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/controller/Login.control.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $data = new LoginControl($email, $pwd);
    $_SESSION["loginMessage"];

    if ($data->isError() == true) {
        $_SESSION["loginMessage"] = "<p class='mb-2 text-danger'>" . $data->errorMessage . "</p>";
        header("Location: ../login.php");
        die();
    } else {
        echo "Login Success!";
    }

}
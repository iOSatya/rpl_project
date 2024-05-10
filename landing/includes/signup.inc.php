<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/model/Database.model.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/model/Signup.model.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/controller/Signup.control.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirmPwd = $_POST["confirmPwd"];
    $playerStatus = $_POST["playerStatus"];

    $data = new SignupControl($email, $pwd, $confirmPwd, $playerStatus);
    
    if ($data->isError() == true) {
        echo $data->errorMessage;
    } else {
        $data->signupPlayer();
        echo "Signup Success!";
    }

}
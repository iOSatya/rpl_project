<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";

if (!isset($_SESSION["playerData"])) {
    header("Location: landing/login.php");
} else {
    header("Location: landing/home.php");
}
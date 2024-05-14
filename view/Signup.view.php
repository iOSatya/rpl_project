<?php

require_once BASE_URL . "view/AddItem.view.php";

class SignupView extends AddItem {
    public function __construct() {

        parent::getHead();
        parent::__construct(["signup.pages.php"]);
        parent::getFoot();
    }
}
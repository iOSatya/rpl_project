<?php

class SignupView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["signup.pages.php"]);
        parent::getFoot();
    }
}
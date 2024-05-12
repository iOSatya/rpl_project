<?php

class LoginView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["login.pages.php"]);
        parent::getFoot();
    }
}
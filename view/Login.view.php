<?php

class LoginView extends AddItem {
    public function __construct($pages) {
        parent::getHead();
        parent::__construct($pages);
        parent::getFoot();
    }
}
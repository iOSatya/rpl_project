<?php

class SignupView extends AddItem {
    public function __construct($pages) {
        parent::getHead();
        parent::__construct($pages);
        parent::getFoot();
    }
}
<?php

class Signup extends Database {
    private $email;
    private $pwd;
    private $playerStatus;

    public function __construct($email, $pwd, $playerStatus) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->playerStatus = $playerStatus;
    }
}
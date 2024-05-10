<?php

class SignupControl extends SignupModel {
    public $errors = "";
    private $confirmPwd = "";

    public function __construct($email, $pwd, $confirmPwd, $playerStatus) {
        parent::__construct($email, $pwd, $playerStatus);
        $this->confirmPwd = $confirmPwd;
    }

    public function isError() {
        if (empty($this->email) || empty($this->pwd) || empty($this->confirmPwd) || empty($this->playerStatus)) {
            $this->errors = "Field Must not Empty!";
            return true;
        } else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors = "Email is Invalid!";
            return true;
        } else if (!empty(parent::getEmail($this->email))) {
            $this->errors = "Email is Already Registered!";
            return true;
        } else if ($this->pwd !== $this->confirmPwd) {
            $this->errors = "Password does not Match!";
            return true;
        }
    }

    private function passwordHash($pwd) {
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);
        return $hashedPwd;
    }

    public function signupPlayer() {
        parent::insertPlayer($this->email, $this->passwordHash($this->pwd), $this->playerStatus);
    }
}
<?php

class LoginControl extends LoginModel {
    public $errorMessage = "";

    public function __construct($email, $pwd) {
        parent::__construct($email, $pwd);
    }

    public function isError() {
        if (empty($this->email) || empty($this->pwd)) {
            $this->errorMessage = "Fill All Fields!";
            return true;
        } else if (empty(parent::findEmail($this->email))) {
            $this->errorMessage = "Email is not Registered!";
            return true;
        } else if (!password_verify($this->pwd, )) {
            $this->errorMessage = "Password does not Match";
            return true;
        }
    }

}
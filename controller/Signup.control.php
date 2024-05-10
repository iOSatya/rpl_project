<?php

class SignupControl extends SignupModel {
    public $errors;

    public function isError() {
        if (empty($this->email) || empty($this->pwd) || empty($this->confirmPwd) || empty($this->playerStatus)) {
            $this->errors = "Field Must not Empty!";
            return true;
        } else if (!empty(parent::getEmail(parent::$email))) {
            $this->errors = "Email is Already Registered!";
            return true;
        } else if (parent::$pwd !== parent::$confirmPwd) {
            $this->errors = "Password Does not Match!";
            return true;
        }
    }

    public function signupPlayer() {
        
    }
}
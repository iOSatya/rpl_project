<?php

require_once BASE_URL . "model/Signup.model.php";

class SignupControl extends SignupModel {
    public $errorMessage = "";
    private $confirmPwd = "";
    private $playerId = 0;

    public function __construct($email, $pwd, $confirmPwd, $playerStatus) {
        parent::__construct($email, $pwd, $playerStatus);
        $this->confirmPwd = $confirmPwd;
    }

    public function isError() {
        if (empty($this->email) || empty($this->pwd) || empty($this->confirmPwd) || empty($this->playerStatus)) {
            $this->errorMessage = "Field All Fields!";
            return true;
        } else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errorMessage = "Email is Invalid!";
            return true;
        } else if (!empty(parent::findEmail($this->email))) {
            $this->errorMessage = "Email is Already Registered!";
            return true;
        } else if ($this->pwd !== $this->confirmPwd) {
            $this->errorMessage = "Password does not Match!";
            return true;
        }
    }

    private function passwordHash() {
        $options = [
            "cost" => 13
        ];
        $hashedPwd = password_hash($this->pwd, PASSWORD_BCRYPT, $options);
        return $hashedPwd;
    }

    public function signupPlayer() {
        parent::insertPlayer($this->email, $this->passwordHash(), $this->playerStatus);
        $this->playerId = parent::findPlayerId($this->email);
        if ($this->playerStatus == "Student") {
            parent::insertStudent($this->playerId);
        }
    }
}
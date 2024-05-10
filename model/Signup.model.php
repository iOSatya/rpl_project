<?php

class SignupModel extends Database {
    private $email;
    private $pwd;
    private $playerStatus;

    public function __construct($email, $pwd, $playerStatus) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->playerStatus = $playerStatus;
    }

    public function signupUser() {
        $query = "insert into players (email, pwd, player_status) values (?, ?, ?);";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$this->email, $this->pwd, $this->playerStatus]);
        header("Location: " . $_SERVER["DOCUMENT_ROOT"] . "/view/signup.php");
    }
}
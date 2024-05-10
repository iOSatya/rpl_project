<?php

class SignupModel extends Database {
    protected $email;
    protected $pwd;
    protected $confirmPwd;
    protected $playerStatus;

    public function __construct($email, $pwd, $playerStatus) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->playerStatus = $playerStatus;
    }

    private function signupUser() {
        $query = "insert into players (email, pwd, player_status) values (?, ?, ?);";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$this->email, $this->pwd, $this->playerStatus]);
    }
}
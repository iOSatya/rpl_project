<?php

class SignupModel extends Database {
    protected $email = "";
    protected $pwd = "";
    protected $playerStatus = "";

    public function __construct($email, $pwd, $playerStatus) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->playerStatus = $playerStatus;
    }

    protected function insertPlayer($email, $hashedPwd, $playerStatus) {
        $query = "insert into players (email, pwd, player_status) values (?, ?, ?);";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$email, $hashedPwd, $playerStatus]);
    }
}
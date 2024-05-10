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

    private function insertUser() {
        $query = "insert into players (email, pwd, player_status) values (?, ?, ?);";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$this->email, $this->pwd, $this->playerStatus]);
    }
}
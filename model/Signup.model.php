<?php

require_once BASE_URL . "model/Database.model.php";

class SignupModel extends Database {
    protected $email = "";
    public $pwd = "";
    protected $playerStatus = "";

    public function __construct($email, $pwd, $playerStatus) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->playerStatus = $playerStatus;
    }

    protected function insertPlayer($email, $pwd, $playerStatus) {
        $query = "insert into players (email, pwd, player_status) values (?, ?, ?);";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$email, $pwd, $playerStatus]);
    }
}
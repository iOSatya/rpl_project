<?php

require_once BASE_URL . "model/Database.model.php";

class PlayerModel extends Database {
    public $playerId = "";
    public $email = "";
    public $playerStatus = "";

    public function __construct($email) {
        $this->playerId = parent::findPlayerId($email);
        $this->email = $email;
        $this->playerStatus = parent::findPlayerStatus($email);
    }
}
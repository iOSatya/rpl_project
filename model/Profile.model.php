<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/db.config.php";

class ProfileModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getPlayerProfile($playerId) {
        $sql = "SELECT * FROM players WHERE player_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$playerId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getStudentProfile($playerId) {
        $sql = "SELECT * FROM students WHERE player_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$playerId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

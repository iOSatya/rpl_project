<?php
require_once BASE_URL . "config/db.config.php";

class ProfileModel {
    protected $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getPlayerProfile($playerId) {
        $sql = "SELECT p.player_name, p.email, p.player_status, s.story_skip
                FROM players p
                LEFT JOIN students s ON p.player_id = s.player_id
                WHERE p.player_id = :player_id";
        $params = [
            ':player_id' => $playerId
        ];
        $result = $this->db->queryOne($sql, $params);
        return $result;
    }
}
?>

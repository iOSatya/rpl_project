<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/db.config.php";

// Ambil avatar yang dipilih dari request
$avatar = $_POST['avatar'];
$playerId = 24; // Ganti dengan ID pemain yang sesuai

// Update avatar di dalam database
$sql = "UPDATE players SET avatar = :avatar WHERE player_id = :player_id";
$stmt = $db->prepare($sql);
$stmt->execute([
    ':avatar' => $avatar,
    ':player_id' => $playerId
]);

echo json_encode(['status' => 'success', 'message' => 'Avatar updated successfully']);

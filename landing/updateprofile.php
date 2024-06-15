<?php
// Pastikan file ini disimpan sebagai updateprofile.php

session_start();

// Validasi apakah pengguna sudah login
if (!isset($_SESSION['playerData'])) {
    header('Location: login.php'); // Arahkan ke halaman login jika belum login
    exit();
}

// Ambil data dari form
if (isset($_POST['avatar'])) {
    // Jika ada permintaan untuk mengubah avatar
    $avatar = $_POST['avatar'];

    // Update avatar di database
    require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/db.config.php";

    $sql = "UPDATE players SET avatar = :avatar WHERE player_id = :player_id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':avatar' => $avatar,
        ':player_id' => $_SESSION['playerData']['player_id']
    ]);

    // Perbarui sesi playerData dengan avatar baru
    $_SESSION['playerData']['avatar'] = $avatar;

    echo json_encode(['status' => 'success', 'message' => 'Avatar updated successfully']);
    exit();
}

if (isset($_POST['email'])) {
    // Jika ada permintaan untuk mengubah email
    $email = $_POST['email'];

    // Update email di database
    require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/db.config.php";

    $sql = "UPDATE players SET email = :email WHERE player_id = :player_id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':email' => $email,
        ':player_id' => $_SESSION['playerData']['player_id']
    ]);

    // Pastikan update berhasil
    if ($stmt->rowCount() > 0) {
        // Perbarui sesi playerData dengan email baru
        $_SESSION['playerData']['email'] = $email;

        // Debug: Tambahkan var_dump untuk memeriksa nilai sesi
        var_dump($_SESSION['playerData']['email']);

        // Berikan respons JSON
        echo json_encode(['status' => 'success', 'message' => 'Email updated successfully']);
        exit();
    } else {
        // Jika update gagal, berikan respons JSON error
        echo json_encode(['status' => 'error', 'message' => 'Failed to update email']);
        exit();
    }
}

// Jika tidak ada data yang dikirimkan, arahkan kembali ke halaman profil
header('Location: playerprofile.php');
exit();
?>

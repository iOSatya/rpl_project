<?php
// Ambil data dari form
$email = $_POST['email'];
$display_name = $_POST['display_name'];
$bio = $_POST['bio'];

// Validasi dan update data di database
// ...

// Redirect kembali ke halaman profil
header('Location: playerprofile.php');
exit();
?>

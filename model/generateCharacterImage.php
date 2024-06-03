<?php
$hair = isset($_GET['hair']) ? $_GET['hair'] : 'style1';
$outfit = isset($_GET['outfit']) ? $_GET['outfit'] : 'outfit1';

// Tentukan path gambar berdasarkan pilihan
$imagePath = "path/to/images/{$hair}_{$outfit}.png";

// Kirimkan gambar ke browser
header('Content-Type: image/png');
readfile($imagePath);
?>

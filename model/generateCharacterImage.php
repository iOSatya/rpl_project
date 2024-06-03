<?php
if (isset($_GET['outfit'])) {
    $outfit = $_GET['outfit'];
    $characterImages = [
        'outfit1' => 'images/characters/outfit1.png',
        'outfit2' => 'images/characters/outfit2.png',
    ];

    // Cek apakah outfit yang dipilih ada dalam daftar yang valid
    if (array_key_exists($outfit, $characterImages)) {
        // Ambil URL gambar karakter
        $imageUrl = $characterImages[$outfit];
        // Set header untuk gambar
        header("Content-Type: image/png");
        // Tampilkan gambar
        readfile($imageUrl);
        exit;
    }
}

// Jika outfit tidak valid atau tidak ada, kembalikan 404
http_response_code(404);
echo "Not Found";
?>

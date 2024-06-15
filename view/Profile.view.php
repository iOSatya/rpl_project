<?php

class ProfileView {
    public function render($player, $student) {
        // Ambil avatar default
        $currentAvatar = $player['avatar'] ?: 'avatar1.png';
        $level = $player['level'] ?? 'Tidak diketahui'; // Mengambil level dengan default 'Tidak diketahui' jika tidak ada
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Player Profile</title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .image {
                    background-image: url('images/Old_wooden_wardrobe.png');
                    background-size: cover;
                    background-position: center;
                    height: 100vh;
                    width: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: -1;
                }
                body {
                    color: white;
                }
                h1 {
                    color: white;
                }
                label {
                    color: white;
                }
                .form-control {
                    color: black;
                }
                .avatar {
                    width: 150px;
                    height: 150px;
                    border-radius: 50%;
                    object-fit: cover;
                    border: 2px solid #fff;
                    margin: 0 auto;
                }
                .card {
                    background-color: rgba(0, 0, 0, 0.7);
                }
            </style>
        </head>
        <body>
            <div class="image"></div>
            <div class="container mt-5">
                <h1 class="text-center mb-4">Player Profile</h1>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img id="avatarImg" src="../landing/images/avatar/<?= htmlspecialchars($currentAvatar) ?>" alt="Avatar" class="avatar">
                                <div class="mt-3 mb-3">
                                    <select id="avatarSelect" class="form-control">
                                        <option value="avatar1.png" <?= $currentAvatar == 'avatar1.png' ? 'selected' : '' ?>>Avatar 1</option>
                                        <option value="avatar2.png" <?= $currentAvatar == 'avatar2.png' ? 'selected' : '' ?>>Avatar 2</option>
                                        <option value="avatar3.png" <?= $currentAvatar == 'avatar3.png' ? 'selected' : '' ?>>Avatar 3</option>
                                    </select>
                                    <button id="changeAvatarBtn" class="btn btn-primary mt-2">Change Avatar</button>
                                </div>
                                <h5 class="card-title mt-3">Username: <?= htmlspecialchars($player['player_name']) ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Player Information</h5>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <p><?= htmlspecialchars($player['email']) ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <p><?= htmlspecialchars($player['player_status']) ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level:</label>
                                    <p><?= htmlspecialchars($level) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#avatarSelect').change(function() {
                        var selectedAvatar = $(this).val();
                        $('#avatarImg').attr('src', '../landing/images/avatar/' + selectedAvatar);
                    });

                    $('#changeAvatarBtn').click(function() {
                        var selectedAvatar = $('#avatarSelect').val();
                        $.ajax({
                            type: 'POST',
                            url: 'change_avatar_process.php',
                            data: { avatar: selectedAvatar },
                            success: function(response) {
                                console.log(response);
                                // Perbarui gambar avatar dengan avatar yang baru
                                $('#avatarImg').attr('src', '../landing/images/avatar/' + selectedAvatar);
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    });
                });
            </script>
        </body>
        </html>
        <?php
    }
}
?>

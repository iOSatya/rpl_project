<?php

class ProfileView {
    public function render($player, $student) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Player Profile</title>
            <!-- Bootstrap CSS -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .image {
                    background-image: url('images/Old_wooden_wardrobe.png');
                    background-size: cover;
                    background-position: center;
                    height: 100vh; /* Set height to full viewport height */
                    width: 100%; /* Set width to full width */
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: -1; /* Set background behind other content */
                }
                body {
                    color: white; /* Set text color to white */
                }
                h1 {
                    color: white; /* Ensure h1 color is white */
                }
                label {
                    color: white; /* Ensure label color is white */
                }
                .form-control {
                    color: black; /* Input text color should be black for readability */
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
                                <img id="avatarImg" src="images/avatar/<?= $player['avatar'] ?>" alt="Avatar" class="avatar">
                                <div class="mt-3 mb-3">
                                    <select id="avatarSelect" class="form-control">
                                        <option value="avatar1.png">Avatar 1</option>
                                        <option value="avatar2.png">Avatar 2</option>
                                        <option value="avatar3.png">Avatar 3</option>
                                    </select>
                                    <button id="changeAvatarBtn" class="btn btn-primary mt-2">Change Avatar</button>
                                </div>
                                <h5 class="card-title mt-3">Username: <?= $player['player_name'] ?></h5>
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
                                    <p><?= $player['email'] ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <p><?= $player['player_status'] ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level:</label>
                                    <p><?= $player['level'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- jQuery dan Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-oWtU9HvKVH1WnVzI4F4+hEV0YHbe5sZuT2iU/rZ+Vv2IaxVasDUjKG0sNHpdZUZ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2n0EfMuhscB+6PU/iD9P6n1OdJ2uqFo" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {
                    $('#avatarSelect').change(function() {
                        var selectedAvatar = $(this).val();
                        $('#avatarImg').attr('src', 'images/' + selectedAvatar);
                    });

                    $('#changeAvatarBtn').click(function() {
                        var selectedAvatar = $('#avatarSelect').val();
                        $.ajax({
                            type: 'POST',
                            url: 'change_avatar_process.php',
                            data: { avatar: selectedAvatar },
                            success: function(response) {
                                console.log(response);
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

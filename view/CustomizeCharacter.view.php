<?php
class CustomizeCharacterView {
    public function render($character) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Customize Character</title>
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
            </style>
        </head>
        <body>
            <div class="image"></div>
            <div class="container mt-5">
                <h1 class="text-center mb-4">Choose Your Character</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form action="customizeCharacter.php" method="post">
                            <div class="form-group">
                                <label for="outfit">Outfit:</label>
                                <select name="outfit" id="outfit" class="form-control">
                                    <option value="outfit1">Outfit 1</option>
                                    <option value="outfit2">Outfit 2</option>
                                </select>
                            </div>
                            <input type="submit" value="Save" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <!-- Contoh gambar grafis karakter -->
                            <img id="character-image" src="images/characters/outfit1.png" alt="Character Graphics" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- jQuery dan Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-oWtU9HvKVH1WnVzI4F4+hEV0YHbe5sZuT2iU/rZ+Vv2IaxVasDUjKG0sNHpdZUZ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2n0EfMuhscB+6PU/iD9P6n1OdJ2uqFo" crossorigin="anonymous"></script>
            
            <!-- Script untuk mengubah gambar karakter -->
            <script>
                $(document).ready(function() {
                    $('#outfit').on('change', function() {
                        updateCharacterImage();
                    });

                    function updateCharacterImage() {
                        var outfit = $('#outfit').val();
                        
                        var imageUrl = 'images/characters/' + outfit + '.png';
                        $('#character-image').attr('src', imageUrl);
                    }
                });
            </script>
        </body>
        </html>
        <?php
    }
}
?>

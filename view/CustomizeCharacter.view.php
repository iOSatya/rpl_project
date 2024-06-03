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
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="text-center mb-4">Customize Your Character</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form action="customizeCharacter.php" method="post">
                            <div class="form-group">
                                <label for="hair">Hair Style:</label>
                                <select name="hair" id="hair" class="form-control">
                                    <option value="style1">Style 1</option>
                                    <option value="style2">Style 2</option>
                                </select>
                            </div>
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
                            <img id="character-image" src="images/funny-illustration-3d-cartoon-backpacker.png" alt="Character Graphics" class="img-fluid">
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
                    $('#hair, #outfit').on('change', function() {
                        updateCharacterImage();
                    });

                    function updateCharacterImage() {
                        var hair = $('#hair').val();
                        var outfit = $('#outfit').val();
                        
                        var imageUrl = 'model/generateCharacterImage.php?hair=' + hair + '&outfit=' + outfit;
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

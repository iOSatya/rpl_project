<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body> -->
    <div class="container">
        <h1>Tambah Soal</h1>
        <form action="" id="questionForm" method="POST">
            <div class="form-group">
                <label for="question">Pertanyaan:</label>
                <input type="text" id="question" name="question" required>
            </div>
            <div class="form-group">
                <label for="optionA">Opsi A:</label>
                <input type="text" id="optionA" name="optionA" required>
            </div>
            <div class="form-group">
                <label for="optionB">Opsi B:</label>
                <input type="text" id="optionB" name="optionB" required>
            </div>
            <div class="form-group">
                <label for="optionC">Opsi C:</label>
                <input type="text" id="optionC" name="optionC" required>
            </div>
            <div class="form-group">
                <label for="optionD">Opsi D:</label>
                <input type="text" id="optionD" name="optionD" required>
            </div>
            <div class="form-group">
                <label for="correctAnswer">Jawaban Benar:</label>
                <select id="correctAnswer" name="correctAnswer" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <button type="submit">Tambah Soal</button>
        </form>
    </div>
<!-- </body>
</html> -->

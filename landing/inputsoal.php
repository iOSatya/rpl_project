<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #fff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
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
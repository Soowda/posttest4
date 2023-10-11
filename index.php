<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    
    <div class="container">
        <h1>Form Input Website</h1>
        <form id="myForm">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Usia:</label>
            <input type="number" id="age" name="age" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div class = "masuk">
                <input type="submit" value="Buat akun">
                <div class="masuk1">
                    <a href="indexx.php">Kembali</a>
                </div>
            </div>
            
        </form>
    </div>

    <div class="result">
        <h2>Hasil Input:</h2>
        <p>Nama: <span id="resultName"></span></p>
        <p>Usia: <span id="resultAge"></span></p>
        <p>Password: <span id="resultPassword"></span></p>
    </div>

    <script src="script1.js"></script>
</body>
</html>

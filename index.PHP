<?php
    include "mysql/db.php";
    if(isset($_POST["submit"])){
        login();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Přihlášení</h2>
        <form action="index.php" method="post">
            <label for="username">Uživatelské jméno:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" name="submit" value="Přihlásit se">

            <div class="register-link">
                Nemáte ještě účet? <a href="register.php">Registrovat se</a>
            </div>
        </form>
    </div>
</body>
</html>


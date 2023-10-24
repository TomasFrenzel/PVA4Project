<?php
    include "mysql/db.php";

    if(isset($_POST["submit"])){
        login();
}

    if(isset($_POST["submit"])){
        echo "data odeslány";
        echo "<br>";

        $username_input = $_POST["username"];
        $password_input = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username = '$username_input' and password = '$password_input' ";
        
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result) === 1) {
            echo 'user ' . $row['username'] . ' connected.';
        }else {
            echo 'no user found.';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bark</title>
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
       <a href="kalkulacka.php"> <button>kalkulačka</button></a>
    </div>
</body>
</html>



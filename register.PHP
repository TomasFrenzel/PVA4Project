<?php
    include "mysql/db.php";

    if(isset($_POST["submit"])){
        echo "data odeslány";

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $query = "INSERT INTO users(username,email,password) 
        VALUES('$username','$email','$password')";

        $result = mysqli_query($connection, $query);
        echo"$username";

        if(!$result){
            die ("dotaz do databze selhal".mysqli_error());
        }
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
        <h2>Registrace</h2>
        <form action="register.php" method="post">
            <label for="username">Uživatelské jméno:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" name="submit"value="registrovat se">

            <div class="register-link">
                Už máte účet? <a href="index.php">Přihlásit se</a>
            </div>
        </form>
    </div>
</body>
</html>

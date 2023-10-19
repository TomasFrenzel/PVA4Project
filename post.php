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
    <h1><span>Registrace</span> proběhla uspěšně</h1>
    <a href="index.php" ><button type="button" class="hb">Login</button></a>
</body>
</html>
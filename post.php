<?php
    include "mysql/db.php";

    if(isset($_POST["submit"])){

        $username_input = $_POST["username"];
        $password_input = $_POST["password"];
        $email_input = $_POST["email"];

        $sql = "SELECT * FROM users WHERE username = '$username_input' and email = '$email_input' ";
        
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result) === 0) {
            //Pošle veci do databáze
            $query = "INSERT INTO users VALUES(NULL, '$username_input','$password_input','$email_input')";

            $result = mysqli_query($connection, $query);

        }else {
            echo 'Uživatelke jmeno nebo heslo je již Obsazene.';
        }
    }
?>
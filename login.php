<?php
        include "mysql/db.php";
        if(isset($_POST["submit"])){
    
            $username_input = $_POST["username"];
            $password_input = $_POST["password"];
    
            $sql = "SELECT * FROM users WHERE username = '$username_input' and password = '$password_input' ";
            
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_array($result);
    
            if(mysqli_num_rows($result) === 1) {
                echo 'Uživatel ' . $row['username'] . ' připojen.';
            }else {
                echo 'Zadali jste špatné uživatelké jemno nebo heslo.';
            }
        }
?>
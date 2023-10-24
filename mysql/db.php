<?php 


    //pripojení do databáze

    $connection = mysqli_connect("localhost", "root", "","loginproject");
    if($connection){
        echo "jsme propojeni s databází";
        echo "<br>";
    } else{
        die("ou neco se pokazilo"); //zastaví zbytek procesu když se to pokazí
    }

    function Registrace(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $query = "INSERT INTO users(username,email,password) 
        VALUES('$username','$email','$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("dotaz do databze selhal".mysqli_error());
        }
    }

    function Login(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Nezadali jste uživatelké jméno";
        } else if(empty($password)){
            echo "Nezadali jste password";
        }else{
            $query = "SELECT * FROM users WHERE username = '$dbUser' 
            AND password = '$dbPass'";

            $result = mysqli_query($connection, $query);
            if ($dbPass == $password && $dbUser == $username){
                echo "Jste přihlášen";
            }else {
                echo "Spatné uživatelké jmneo nebo heslo";
            }
        }
    }

    


?>
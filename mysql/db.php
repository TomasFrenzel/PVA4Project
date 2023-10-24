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

  


?>
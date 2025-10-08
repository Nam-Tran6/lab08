<?php
    // Sets up the Database
    session_start();
    //Records inputted username for PHP
    $username = $_POST["username"];
    //Records inputted password for PHP
    $password = $_POST["password"];

    //Username is hard
    if ($username =="Nam" && $password =="Nam104555355") {
        $_SESSION["user"] = $username;
        header("Location:welcome.php")
    } else {
        echo "Invalid login. <a href='login.html'>Try again</a>";
    }
?>
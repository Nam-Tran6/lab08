<?php
    // Sets up the Database
    session_start();
    //Records inputted username for PHP
    $username = $_POST["username"];
    //Records inputted password for PHP
    $password = $_POST["password"];

    //Records hidden values for comparisons
    $secretname = $_POST["secretname"];
    $secretpass = $_POST["secretvalue"];

    if ($username == $secretname && $password == $secretvalue) {
        $_SESSION["user"] = $username;
        header("Location:welcome.php");
    } else {
        echo "Invalid login. <a href='login.html'>Try again</a>";
    }
?>
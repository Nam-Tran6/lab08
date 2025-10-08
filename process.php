<?php
    // Sets up the Database
    session_start();
    //Records inputted username for PHP
    $username = $_POST["name"];
    //Records inputted password for PHP
    $password = $_POST["security"];

    //Records hidden values for comparisons
    $secretname = $_POST["secretname"];
    $secretvalue = $_POST["secretpass"];

    //verifies if inputted data matches secret data
    if ($username == $secretname && $password == $secretvalue) {
        // Saves a universal user data for username inputted
        $_SESSION["user"] = $username;
        // Heads to welcome.php
        header("Location:welcome.php");
    } else {
        // Else sends an error message for retry
        echo "Invalid login. <a href='login.php'>Try again</a>";
    }
?>
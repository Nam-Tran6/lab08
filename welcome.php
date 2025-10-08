<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
	<title>Welcome Page</title>

    <!--Meta Tags-->
	<meta charset="utf-8">
	<meta name="description" content="Welcome Page for User" >
	<meta name="keywords"    content="Welcome, User" >
	<meta name="author"      content="Kha Nam Tran" />
</head>

<body>
<?php
    // includes header file
    include "header.inc"

    // Starts session on Welcome page, allowing for consistent data
    session_start();
    // if statement (isset determines if value is not null, determining if user is correct)
    if (isset($_SESSION['user'])) {
    // Annouce Welcome to the username
    echo " Welcome, " . $_SESSION ['user'];
    // Else return back to the header
    } else {
    header('Location: login.html');
    }

    // includes footer file
    include "footer.inc"
?>    

</body>

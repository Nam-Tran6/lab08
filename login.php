<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
	<title>Login Page</title>

    <!--Meta Tags-->
	<meta charset="utf-8">
	<meta name="description" content="Login Page for Username, Password" >
	<meta name="keywords"    content="Login, Username, Password" >
	<meta name="author"      content="Kha Nam Tran" >
</head>

<body>

<?php
    // header inclusions
    include "header.inc";
?>
    <!--Form for Password and Username; Data sent to process.php-->
    <form method="POST" action="process.php">
        <!--Label/Input for Username-->
        <label for="username">Username:</label>
        <input type="text" id="username" name="name" required>

        <br>

        <!--Label/Input for Password-->
        <label for ="password">Password:</label>
        <input type="text" id= "password" name="security" required>

        <br>

        <!--Hidden token with Name for verification-->
        <input type="hidden" name="secretname" value="Nam">
        <input type="hidden" name="secretpass" value="Nam104555355">
        <input type="submit" value="Login">
    </form>

<?php
    // footer inclusions
    include "footer.inc";
?>

</body>

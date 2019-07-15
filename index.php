<?php 

session_start();

//check if logged in

//if logged in - go to the main page


?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Music Ratings App</title>
    <meta name="description" content="Keep track of your favourite music">
    <meta name="author" content="JKapella">

</head>

<body>

<form action="login.php">
    <label for="username">Username:</label>
    <input id="username" type="text">
    <label for="password">Password:</label>
    <input id="password" type="text">
    <input type="submit">
</form>

</body>
</html>
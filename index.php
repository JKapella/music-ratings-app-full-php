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
    <meta name="description" content="Music Ratings App - Keep track of your favourite music">
    <meta name="author" content="JKapella">

</head>

<body>

<form action="login.php">
    <label for="username">Username:</label>
    <input id="username" name="username" type="text">
    <label for="password">Password:</label>
    <input id="password" name="password" type="text">
    <input type="submit">
</form>

</body>
</html>
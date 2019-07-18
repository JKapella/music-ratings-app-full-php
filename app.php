<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
}

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

</body>
</html>
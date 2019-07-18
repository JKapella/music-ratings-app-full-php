<?php

require_once __DIR__ . '/vendor/autoload.php';

use MusicRatings\Classes\Factories\AlbumHandlerFactory;
use MusicRatings\Classes\AlbumHandler;
use MusicRatings\Classes\AlbumsViewHelper;

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
}

$albumHandler = AlbumHandlerFactory::createAlbumHandler();
$albums = $albumHandler->getAllAlbums();

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Music Ratings App</title>
    <meta name="description" content="Music Ratings App - Keep track of your favourite music">
    <meta name="author" content="JKapella">
    <link rel="stylesheet" href="public/styles.css">

</head>

<body>

<?php 
    if (isset($albums)) {
        echo AlbumsViewHelper::printAllAlbums($albums);
    } 
?>

</body>
</html>
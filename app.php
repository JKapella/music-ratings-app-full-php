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
    <link rel="stylesheet" href="public/normalize.css">
    <script defer src="public/app.js"></script>

</head>

<body>

<div class="page-container">
    <h1>Music Ratings App</h1>
    <button id='listenedButton'>Listened</button>
    <button id='unlistenedButton'>Unlistened</button>
    <button id='newEntryButton'>New Entry</button>
    <button id='nextupButton'>Next up!</button>
    <?php 
        if (isset($albums)) {
            echo AlbumsViewHelper::printAllAlbums($albums);
        } 
    ?>
    <div id='newEntry' class="new-entry-container hidden">
        <h3>Create New Entry</h3>
        <form>
            <label for="artist">Artist:</label>
            <input id='artist' type="text" name='artist'>
            <label for="release">Release:</label>
            <input id='release' type="text" name='release'>
            <label for="genre">Genre:</label>
            <input id='genre' type="text" name='genre'>
            <label for="other_genre">Alt-Genre:</label>
            <input id='other_genre' type="text" name='other_genre'>
            <label for="format">Format:</label>
            <select id='format' name='format'>
                <option value=""></option>    
                <option value="EP">EP</option>
                <option value="LP">LP</option>
                <option value="Single">Single</option>
            </select>
            <label for="year">Year:</label>
            <input id='year' type="text" name='year'>
            <label for="listened">Listened:</label>
            <select id='listened' name='listened'>
                <option value="No">No</option>    
                <option value="Yes">Yes</option>
            </select>
            <input type="submit">
        </form>
    </div>
</div>


</body>
</html>
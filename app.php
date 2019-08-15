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
            <input id='artist' class="form-element" type="text" name='artist'>
            <label for="release">Release:</label>
            <input id='release' class="form-element" type="text" name='release'>
            <label for="genre">Genre:</label>
            <input id='genre' class="form-element" type="text" name='genre'>
            <label for="other_genre">Alt-Genre:</label>
            <input id='other_genre' class="form-element" type="text" name='other_genre'>
            <label for="format">Format:</label>
            <select id='format' class="form-element" name='format'>
                <option value=""></option>    
                <option value="EP">EP</option>
                <option value="LP">LP</option>
                <option value="Single">Single</option>
            </select>
            <label for="year">Year:</label>
            <input id='year' class="form-element" type="text" name='year'>
            <label for="listened">Listened:</label>
            <select id='listened' class="form-element" name='listened'>
                <option value="No">No</option>    
                <option value="Yes">Yes</option>
            </select>
            <label for="rating">Rating:</label>
            <select id='rating' class="form-element" name='rating'>
                <option value="0">0</option>    
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
            </select>
            <label for="notes">Notes:</label>
            <input id='notes' class="form-element" type="text" name='notes'>
            <input class="form-element" type="submit">
        </form>
    </div>
</div>


</body>
</html>
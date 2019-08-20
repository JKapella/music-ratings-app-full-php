<?php

use MusicRatings\Classes\NewEntry;

require_once __DIR__ . '/vendor/autoload.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
}

//need to move stuff from POST data to the newentry fields - as an associative array

$newEntryFields = [];

$newEntry = new NewEntry(newEntryFields);

//Instantiate a 'new entry' class, which should have the validation on and stuff!
//This should then dump out as appropriate into the DB, woop woop
//Then it should go back to the main page, but 
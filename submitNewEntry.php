<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
}


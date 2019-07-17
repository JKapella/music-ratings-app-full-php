<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

if (isset($_SESSION['loggedIn'])) {
    
} else {
    header('Location: index.php');
}
<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

use MusicRatings\Classes\Factories\LoginHandlerFactory;

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginHandler = LoginHandlerFactory::createLoginHandler();
    $userVerified = $loginHandler->checkCredentials($username, $password);
    if ($userVerified === true) {
        header('Location: app.php');
        $_SESSION['loggedIn'] = true;
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
};
<?php

require_once __DIR__ . '/vendor/autoload.php';

use MusicRatings\Classes\Factories\LoginHandlerFactory;

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginHandler = LoginHandlerFactory::createLoginHandler();
    $userVerified = $loginHandler->checkCredentials($username, $password);
    if ($userVerified === true) {
        echo 'Its Good!';
    } else {
        echo 'failed to verify credentials';
        //header('Location: index.php');
    }
} else {

    echo 'failed to read post data';
    //header('Location: index.php');

};
<?php

use MusicRatings\LoginHandlerFactory;

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginHandler = LoginHandlerFactory();
    $loginHandler->checkCredentials($username, $password);

} else {

    header('Location: index.php');
    
};
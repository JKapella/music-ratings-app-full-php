<?php

use MusicRatings\LoginHandlerFactory;

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $loginHandler = LoginHandlerFactory();
} else {
    header('Location: index.php');
};
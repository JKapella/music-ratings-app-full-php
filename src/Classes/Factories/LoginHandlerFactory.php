<?php

namespace MusicRatings\Classes\Factories;

use MusicRatings\Classes\DbConnection;
use MusicRatings\Config;
use MusicRatings\Classes\LoginHandler;

Class LoginHandlerFactory 
{
    public static function createLoginHandler()
    {
        $dbDetails = Config::getDbDetails();
        $dbConnection = new DbConnection($dbDetails);
        return new LoginHandler($dbConnection);
    }
}
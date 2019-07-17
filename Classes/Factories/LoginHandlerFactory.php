<?php

namespace MusicRatings\Classes\Factories;

use MusicRatings\Classes\DbConnection;

Class LoginHandlerFactory 
{
    public static function createLoginHandler()
    {
        $dbDetails = Config::getDbDetails();
        $dbConnection = new DbConnection($dbDetails);
        return new LoginHandler($dbConnection);
    }
}
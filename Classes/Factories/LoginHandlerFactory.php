<?php

namespace MusicRatings;

Class LoginHandlerFactory 
{
    public static function createLoginHandler()
    {
        $dbDetails = Config::getDbDetails();
        $dbConnection = new DbConnection($dbDetails);
        return new LoginHandler($dbConnection);
    }
}
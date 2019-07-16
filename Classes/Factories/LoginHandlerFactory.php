<?php

namespace MusicRatings;

Class LoginHandlerFactory 
{
    public static function __invoke()
    {
        $dbDetails = Config::getDbDetails();
        $dbConnection = new DbConnection($dbDetails);
    }
}
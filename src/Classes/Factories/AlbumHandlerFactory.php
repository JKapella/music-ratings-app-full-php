<?php

namespace MusicRatings\Classes\Factories;

use MusicRatings\Config;
use MusicRatings\Classes\DbConnection;
use MusicRatings\Classes\AlbumHandler;

Class AlbumHandlerFactory 
{
    public static function createAlbumHandler() 
    {
        $dbDetails = Config::getDbDetails();
        $dbConnection = new DbConnection($dbDetails);
        return new AlbumHandler($dbConnection);
    }
}
<?php

namespace MusicRatings;

Class DbConnection 
{
    private $dbConnection;

    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getDbConnection() 
    {
        return $this->dbConnection;
    }
}
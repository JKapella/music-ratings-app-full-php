<?php

namespace MusicRatings;

Class LoginHandler
{
    private $db;

    public function __construct(DbConnection $dbConnection) 
    {
        $this->db = $dbConnection;
    }

    public function checkCredentials(string $username, string $password) 
    {
        
    }
}
<?php

namespace MusicRatings;

Class LoginHandler
{
    private $db;

    public function __construct(DbConnection $dbConnection) 
    {
        $this->db = $dbConnection;
    }
}
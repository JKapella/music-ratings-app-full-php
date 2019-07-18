<?php

namespace MusicRatings\Classes;

class AlbumHandler 
{
    private $db;

    public function __construct(DbConnection $dbConnection) 
    {
        $this->db = $dbConnection;
    }

    public function getAllAlbums() 
    {
        $db = $this->db->getDbConnection();
        $query = $db->prepare("SELECT * FROM `albums`;");
        $query->execute();
        $albums = $query->fetchAll(PDO::FETCH_CLASS, "Album");
        return $albums;
    }
}
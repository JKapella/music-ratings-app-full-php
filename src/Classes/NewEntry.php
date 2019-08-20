<?php

namespace MusicRatings\Classes;

Class NewEntry 
{
    private $id;
    private $artist;
    private $release;
    private $genre;
    private $format;
    private $other_genre;
    private $year;
    private $listened;
    private $rating;
    private $notes;

    public function __construct(array $newEntryDetails)
    {
        
    }
}
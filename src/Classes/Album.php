<?php 

namespace MusicRatings\Classes;

class Album 
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

    public function getProperties() 
    {
        $properties = [
            'id' => $this->id,
            'artist' => $this->artist,
            'release' => $this->release,
            'genre' => $this->genre,
            'format' => $this->format,
            'other_genre' => $this->other_genre,
            'year' => $this->year,
            'listened' => $this->listened,
            'rating' => $this->rating,
            'notes' => $this->notes
        ];
        return $properties;
    }
}
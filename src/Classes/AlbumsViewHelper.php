<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "";
        foreach ($albums as $album) {
            $properties = $album->getProperties();
            $html .= "<div class='entry-container'>";
            foreach($properties as $field => $value) {
                $html .= "$field: $value,";
            }    
            $html .= "</div>";
        }
        return $html;
    }
}
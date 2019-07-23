<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "";
        foreach ($albums as $album) {
            $properties = $album->getProperties();
            $html .= "  <div class='entry-container' data-id='" . $properties['id'] . "'>
            <h3>" . $properties['artist'] . " - 
            <em>" . $properties['release'] . "</em>";
            if ($properties['format'] != "") {
                $html .= " (" . $properties['format'] . ")";
            }
            $html .= "</h3>";
            
            $html .= "<td>" . $properties['genre'] . "</td>
            <td>" . $properties['other_genre'] . "</td>
            <td>" . $properties['year'] . "</td>
            <td>" . $properties['rating'] . "</td>
            <td></td>   
            </div>";
        }
        return $html;
    }
}
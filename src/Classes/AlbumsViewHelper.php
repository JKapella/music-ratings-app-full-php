<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "";
        foreach ($albums as $album) {
            $html .= "
            <div class='entry-container'>
                $album
            </div>
            ";
        }
        return $html;
    }
}
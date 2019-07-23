<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "<table>
        <th>Artist</th>
        <th>Release</th>
        <th>Format</th>
        <th>Genre</th>
        <th>Other Genre</th>
        <th>Year</th>
        <th>Rating</th>
        <th></th>";
        foreach ($albums as $album) {
            $properties = $album->getProperties();
            $html .= "  <tr data-id='" . $properties['id'] . "'>
            <td>" . $properties['artist'] . "</td>
            <td>" . $properties['release'] . "</td>
            <td>" . $properties['format'] . "</td>
            <td>" . $properties['genre'] . "</td>
            <td>" . $properties['other_genre'] . "</td>
            <td>" . $properties['year'] . "</td>
            <td>" . $properties['rating'] . "</td>
            <td></td>   
            </tr>";
        }
        $html .= "</table>";
        return $html;
    }
}
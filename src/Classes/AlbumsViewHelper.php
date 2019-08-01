<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "";
        $listenedHtml = "<h2>Listened</h2>";
        $unlistenedHtml = "<h2>Unlistened</h2>";
        foreach ($albums as $album) {
            $properties = $album->getProperties();

            if ($properties['listened'] != 'Yes') {
                $unlistenedHtml .= "  <div class='entry-container' data-id='" . $properties['id'] . "'>
                <h3>" . $properties['artist'] . " - 
                <em>" . $properties['release'] . "</em>
                - " . $properties['year'];
                if ($properties['format'] != "") {
                    $unlistenedHtml .= " (" . $properties['format'] . ")";
                }
                $unlistenedHtml .= "</h3><h3>";
                $unlistenedHtml .= $properties['genre'] .  $properties['other_genre'] . $properties['rating'];
                $unlistenedHtml .= "</h3></div>";
            } else {

                $listenedHtml .= "  <div class='entry-container' data-id='" . $properties['id'] . "'>
                <h3>" . $properties['artist'] . " - 
                <em>" . $properties['release'] . "</em>
                - " . $properties['year'];
                if ($properties['format'] != "") {
                    $listenedHtml .= " (" . $properties['format'] . ")";
                }
                $listenedHtml .= "</h3><h3>";
                $listenedHtml .= $properties['genre'] .  $properties['other_genre'] . $properties['rating'];
                $listenedHtml .= "</h3></div>";
            }
        }
        $html .= $listenedHtml;
        $html .= $unlistenedHtml;
        return $html;
    }
}
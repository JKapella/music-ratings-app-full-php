<?php

namespace MusicRatings\Classes;

class AlbumsViewHelper 
{
    public static function printAllAlbums(array $albums) 
    {
        $html = "";
        $listenedHtml = "<div><h2>Listened</h2>";
        $unlistenedHtml = "<div><h2>Unlistened</h2>";
        foreach ($albums as $album) {
            $properties = $album->getProperties();

            if ($properties['listened'] != 'Yes') {
                $unlistenedHtml .= "  <div class='entry-container' data-id='" . $properties['id'] . "'>
                <div class='album-details'>
                <h3>" . $properties['artist'] . " - 
                <em>" . $properties['release'] . "</em>
                - " . $properties['year'];
                if ($properties['format'] != "") {
                    $unlistenedHtml .= " (" . $properties['format'] . ")";
                }
                $unlistenedHtml .= "</h3><h3>";
                $unlistenedHtml .= $properties['genre'] . " " . $properties['other_genre'] . "</h3></div>"
                . "<div class='select-entry'>Edit</div>
                <div class='rating'>" . $properties['rating'] . "</div>";
                $unlistenedHtml .= "</div>";
            } else {

                $listenedHtml .= "  <div class='entry-container' data-id='" . $properties['id'] . "'>
                <div class='album-details'>
                <h3>" . $properties['artist'] . " - 
                <em>" . $properties['release'] . "</em>
                - " . $properties['year'];
                if ($properties['format'] != "") {
                    $listenedHtml .= " (" . $properties['format'] . ")";
                }
                $listenedHtml .= "</h3><h3>";
                $listenedHtml .= $properties['genre'] . " " . $properties['other_genre'] . "</h3></div>"
                . "<div class='select-entry'>Edit</div>
                <div class='rating'>" . $properties['rating'] . "</div>";
                $listenedHtml .= "</div>";
            }
        }
        $html .= $listenedHtml . "</div>";
        $html .= $unlistenedHtml . "</div>";
        return $html;
    }
}
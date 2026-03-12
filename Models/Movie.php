<?php
class Movie
{
    use  Visualizable;
    public $title;
    public $description;
    public $release_year;
    public $vote;
    public $genres;
    public function __construct(string $_title, string $_description, int $_releaseYear, int $_vote, array $_genres)
    {
        if ($_releaseYear == date('Y')) {
            $this->isNew = true;
        }
        $this->title = $_title;
        $this->description = $_description;
        $this->release_year = $_releaseYear;
        $this->vote = $_vote;
        $this->genres = $_genres;
    }

    public function getVoteStars(): string
    {
        $stars = "";
        for ($i = 0; $i < 5; $i++) {
            if ($this->vote > $i) {
                $stars .= "★";
            } else {
                $stars .= "☆";
            }
        }
        return $stars;
    }
}

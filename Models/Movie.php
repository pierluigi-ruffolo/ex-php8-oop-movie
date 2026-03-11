<?php
class Movie
{
    public $title;
    public $description;
    public $release_year;
    public $vote;
    public $genres;
    public function __construct(string $_title, string $_description, int $_releaseYear, int $_vote, array $_genre)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->release_year = $_releaseYear;
        $this->vote = $_vote;
        $this->genres = $_genre;
    }
    public function getSummary()
    {
        return "titolo film: " . $this->title . "<br>" . "descrizione " . $this->description . "<br>" . "anno uscita " . $this->release_year;
    }
    public function getVoteStars()
    {
        $stars = "";
        for ($i = 0; $i < 5; $i++) {
            if ($this->vote > $i) {
                $stars .= "★";
            } else {
                $stars .= "☆";
            }
        }
        return "voto " . $stars;
    }
}

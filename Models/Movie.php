<?php
class Movie
{
    use  Visualizable;
    public $title;
    public $description;
    private $release_year;
    private $vote;
    public $genres;
    public function __construct(string $_title, string $_description, int $_releaseYear, int $_vote, array $_genres)



    {
        $this->setRelease_year($_releaseYear);
        $this->setVote($_vote);

        $this->title = $_title;
        $this->description = $_description;
        $this->genres = $_genres;

        if ($_releaseYear == date('Y')) {
            $this->isNew = true;
        }
    }
    public function setRelease_year($releaseYear)
    {
        if (is_numeric($releaseYear) && $releaseYear >= 1895 &&  $releaseYear <= 2030) {
            $this->release_year =  (int)$releaseYear;
        } else {
            throw new Exception("Anno non valido : $releaseYear. Deve essere tra 1895 e 2030.");
        }
    }

    public function getRelease_year()
    {
        return   $this->release_year;
    }

    public function setVote($setVote)
    {
        if (is_numeric($setVote) && $setVote >= 0 &&  $setVote <= 5) {
            $this->vote = $setVote;
        } else {
            throw new Exception("Voto non valido: $setVote. Deve essere tra 0 e 5.");
        }
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

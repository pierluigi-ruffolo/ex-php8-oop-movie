<!DOCTYPE html>
<html lang="en">
<?php
class Movie
{
    public $title;
    public $description;
    public $release_year;
    public $vote;
    public function __construct(string $_title, string $_description, int $_releaseYear, int $_vote)
    { {
            $this->title = $_title;
            $this->description = $_description;
            $this->release_year = $_releaseYear;
            $this->vote = $_vote;
        }
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
$pulpFiction = new Movie(
    "Pulp Fiction",
    "Le vite di due sicari si intreccia",
    1994,
    5
);
$interstellar = new Movie(
    "Interstellar",
    "Un gruppo di astronauti viaggia attraverso un wormhole alla ricerca di una nuova casa per l'umanità.",
    2014,
    4
);

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $pulpFiction->getSummary() . " ";
    echo $pulpFiction->getVoteStars();
    echo "<br>";
    echo $interstellar->getSummary() . " ";
    echo $interstellar->getVoteStars();
    ?>
</body>

</html>
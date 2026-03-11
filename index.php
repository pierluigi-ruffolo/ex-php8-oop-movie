<!DOCTYPE html>
<html lang="en">
<?php

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
$pulpFiction = new Movie(
    "Pulp Fiction",
    "Le vite di due sicari si intreccia",
    1994,
    5,
    [new Genre("Azione"), new Genre("triller")]
);
$interstellar = new Movie(
    "Interstellar",
    "Un gruppo di astronauti viaggia attraverso un wormhole alla ricerca di una nuova casa per l'umanità.",
    2014,
    4,
    [new Genre("Azione"), new Genre("Thriller")]
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
<?php

$azione = new Genre("Azione");
$fantascienza = new Genre("Fantascienza");
$drammatico = new Genre("Drammatico");
$commedia = new Genre("Commedia");
$horror = new Genre("Horror");
$animazione = new Genre("Animazione");
$thriller = new Genre("Thriller");

try {
    $movies = [
        new Movie("Pulp Fiction", "Le vite di due sicari si intrecciano.", 1945, 5, [$azione, $thriller]),
        new Movie("Interstellar", "Astronauti alla ricerca di una nuova casa.", 2014, 5, [$fantascienza, $drammatico]),
        new Movie("Avatar 4", "Il viaggio continua su Pandora.", 2026, 4, [$azione, $fantascienza]),
        new Movie("Il Cavaliere Oscuro", "Batman affronta il Joker a Gotham City.", 2008, 5, [$azione, $drammatico]),
        new Movie("Shrek 5", "Il ritorno dell'orco più amato.", 2026, 4, [$animazione, $commedia]),
        new Movie("Inception", "Entrare nei sogni per rubare segreti.", 2010, 5, [$fantascienza, $azione]),
        new Movie("The Conjuring", "Indagini su fenomeni paranormali.", 2013, 3, [$horror]),
        new Movie("Dune - Parte 3", "L'ascesa di Paul Atreides su Arrakis.", 2026, 5, [$fantascienza, $azione]),
        new Movie("Parasite", "Una famiglia si infiltra in una casa ricca.", 2019, 5, [$thriller, $drammatico]),
        new Movie("Toy Story", "I giocattoli prendono vita.", 1995, 4, [$animazione, $commedia])
    ];
} catch (Exception $e) {
    echo "Attenzione: " . $e->getMessage();
}

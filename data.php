<?php
include __DIR__ . '/classes/movie.php';
include __DIR__ . '/classes/genre.php';

$arrMovie = [

    new Movie(
        'Il Cavaliere Oscuro',
        '2008',
        '4',
        [new Genre('Azione'), new Genre('Fantascienza'), new Genre('boooo')]

    ),

    new Movie(
        'Interstellar',
        '2014',
        '4',
        [new Genre('Azione'), new Genre('Drammatico'), new Genre('Fantascienza')]


    ),

    new Movie(
        'Una Notte da Leoni',
        '2009',
        '4',
        [new Genre('Commedia')]

    ),

];

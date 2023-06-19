<?php
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genre.php';

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

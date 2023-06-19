<?php

$genres = [
    1 => "Comedy",
    2 => "Romance",
    3 => "Dystopian",
    4 => "Science Fiction",
    5 => "Horror",
    6 => "Documentary",
    7 => "Drama",
];

$movies = [
    new Movie(
        'Yes Man',
        'Film',
        '2008',
        'Peyton Reed',
        [
            new Genre($genres[1]),
            new Genre($genres[2]),
        ]
    ),
    new Movie(
        'Black Mirror',
        'Tv Series',
        '2011',
        'Charlie Brooker',
        [
            new Genre($genres[3]),
            new Genre($genres[4]),
        ]
    ),
    new Movie(
        'A Classic Horror Story',
        'Film',
        '2021',
        'Roberto De Feo',
        [
            new Genre($genres[5]),
        ]
    ),
    new Movie(
        'The Playlist',
        'Tv Series',
        '2022',
        'Christian Spurrier',
        [
            new Genre($genres[6]),
            new Genre($genres[7]),
        ]
    ),
    new Movie(
        'Scary Movie',
        'Film',
        '2000',
        'Keenen Ivory Wayans',
        [
            new Genre($genres[1]),
            new Genre($genres[5]),
        ]
    ),
];

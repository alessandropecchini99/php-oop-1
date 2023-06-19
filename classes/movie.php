<?php

// definisco la classe
class Movie
{
    // istanze
    public string $title = 'Title Missing';
    public string $type = 'Type Missing';
    public string $release = 'Release Missing';
    public string $director = 'Director Missing';
    public array $genres;

    // costruttore
    public function __construct($title, $type, $release, $director, array $genres = [])
    {
        $this->title = $title;
        $this->type = $type;
        $this->release = $release;
        $this->director = $director;
        // controllo i dati generi
        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die('I generi devono essere di tipo address');
            }
        };
        $this->genres = $genres;
    }

    // metodo per richiamare i dati in pagina
    public function allData()
    {
        $allGenre = implode(', ', $this->genres);
        return $this->type . ' - ' . $this->title . ' - ' . $this->release . ' - ' . $allGenre . ' - ' . $this->director;
    }
}

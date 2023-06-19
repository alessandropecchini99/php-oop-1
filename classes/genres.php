<?php

// definisco la classe 
class Genre
{
    // istanza
    public string $genre;

    // costruttore
    public function __construct(string $genre)
    {
        $this->genre = $genre;
    }

    // metodo per convertire in stringa
    public function __toString()
    {
        return $this->genre;
    }
}

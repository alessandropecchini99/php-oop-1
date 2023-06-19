<?php

class Genre
{
    public string $genre;

    public function __construct(string $genre)
    {
        $this->genre = $genre;
    }

    public function __toString()
    {
        return $this->genre;
    }
}

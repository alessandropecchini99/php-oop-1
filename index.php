<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza    X
   => all'interno della classe è definito un costruttore                    X
   => all'interno della classe è definito almeno un metodo                  X
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà --FATTO -->

<?php

// definisco la classe
class Movie
{
    public $title = 'Title Missing';
    public $type = 'Type Missing';
    public $release = 'Release Missing';

    public function allData()
    {
        return $this->title . ' ' . $this->type . ' ' . $this->release;
    }

    public function __construct($title, $type, $release)
    {
        $this->title = $title;
        $this->type = $type;
        $this->release = $release;
    }
}

// oggetto Yes Man
$yesMan = new Movie('Yes Man', 'Film', '2008-12-19');
echo $yesMan->allData();

echo '<br>';

// oggetto Back Mirror
$blackMirror = new Movie('Black Mirror', 'Tv Series', '2011-12-04');
echo $blackMirror->allData();

echo '<br>';

// oggetto A Classic Horror Story
$horrorStory = new Movie('A Classic Horror Story', 'Film', '2021-07-14');
echo $horrorStory->allData();

echo '<br>';

// oggetto The Playlist
$playlist = new Movie('The Playlist', 'Tv Series', '2022-10-13');
echo $playlist->allData();

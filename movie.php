<?php
class Movie
{
    // variabili d'istanza
    public $title;
    public $year;
    public $genre;

    // costruttore
    public function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    //metodo
    public function getMovieInfo()
    {
        return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . $this->genre;
    }
}

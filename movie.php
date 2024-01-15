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
        // metodo che accetta un genre
        //  return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . $this->genre;

        // metodo che accetta due genre
        return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . implode(", ", $this->genre);
    }
}

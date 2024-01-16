<?php
class Movie
{
    // variabili d'istanza
    public $title;
    public $year;
    public $genre;

    // costruttore
    public function __construct($_title, $_year, $_genre)
    {
        /* $this->title = $_title; */

        $this->set_title($_title);
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function set_title($title)
    {
        if (strlen($title) > 3) {
            $this->title = $title;
        }
    }

    //metodo
    public function get_movie_info()
    {
        // metodo che accetta un genre
        //  return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . $this->genre;

        // metodo che accetta due genre
        return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . implode(", ", $this->genre);
    }
}

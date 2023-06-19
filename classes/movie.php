<?php

class Movie
{
    public string $title;
    public string $year;
    public string $vote;
    public string $genre;


    public function __construct($title, $year, $vote, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->genre = $genre;
    }
}

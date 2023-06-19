<?php
class Genre
{
    public string $genreString;

    public function __construct($genreString)
    {
        $this->genreString = $genreString;
    }
    public function __toString()
    {
        return $this->genreString;
    }
}

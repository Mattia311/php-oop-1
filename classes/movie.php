<?php

class Movie {
    public $title;
    public $director;
    public $country;
    public $year;
    public $genre;
    public $cast;

    function __construct($title,$director,$country,$year,$genre,$cast)
    {
        $this->title = $title;
        $this->director = $director;
        $this->country = $country;
        $this->year = $year;
        $this->genre = $genre;
        $this->cast = $cast;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDirector() {
        return $this->director;
    }
    public function getCountry() {
        return $this->country;
    }
    public function getYear() {
        return $this->year;
    }
    public function getGenre() {
        return $this->genre;
    }
    public function getCast() {
        return $this->cast;
    }
}

$movies = new Movie("Batman Begins","Christopher Nolan","USA","2005","Azione", "Christian Bale, Michael Caine, Morgan Freeman");

echo $movies->getTitle();

echo $movies->getDirector();

echo $movies->getCountry();

echo $movies->getYear();

echo $movies->getGenre();

echo $movies->getCast();

//var_dump($movies);


?>
<?php

class Genre{

    private array $_films;
    private string $_genre;

    // Construct

    public function __construct($genre)
    {
        $this->_genre = $genre;
        $this->_films = [];

    }

    // Méthodes

    public function addFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    public function afficherFilmsGenre()
    {   
        echo "Films du genre ".$this->_genre. "<br><br>";
        foreach ($this->_films as $film) {
            echo $film->infoFilms()."<br>";
        }
    }

}




















?>
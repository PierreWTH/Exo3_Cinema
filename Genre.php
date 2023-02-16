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
        echo " <h3> Films du genre ".$this->_genre. " : </h3>";
        foreach ($this->_films as $film) {
            echo $film->infoFilms()."<br>";
        }
    }

    // GETTERS AND SETTERS

    // Film
    public function get_films()
    {
        return $this->_films;
    }

  
    public function set_films($_films)
    {
        $this->_films = $_films;

        return $this;
    }

    // Genre
    
    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }
}

  



















?>
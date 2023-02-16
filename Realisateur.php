<?php

class Realisateur extends Personne{
 
    private array $_filmsreal;
    
    // Construct
    
    
        public function __construct($prenom, $nom, $birthdate, $sexe)
        {   
            parent::__construct($nom, $prenom,$birthdate, $sexe);

        }
    
    // Méthodes

    public function addFilms(Film $film)
    {
        $this->_filmsreal[] = $film;
    }
    
    function afficherFilmsReal(){
        echo "<h3> Films du réalisateur ".$this->_prenom. " ".$this->_nom." :<br> </h3>";
        foreach ($this->_filmsreal as $value) {
            echo $value->infoFilms()."<br>";
        }

    }

    // GETTERS AND SETTERS

    public function get_filmsreal()
    {
        return $this->_filmsreal;
    }

    public function set_filmsreal($_filmsreal)
    {
        $this->_filmsreal = $_filmsreal;

        return $this;
    }
}
    
?>
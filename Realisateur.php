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
        echo "Films du réalisateur ".$this->_nom. " ".$this->_prenom."<br><br>";
        foreach ($this->_filmsreal as $value) {
            echo $value->infoFilms()."<br>";
        }

    }
}
    
?>
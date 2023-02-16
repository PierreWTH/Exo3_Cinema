<?php

class Acteur extends Personne{


// Déclaration propriété
    private array $_castings;

// Construct


    public function __construct($prenom, $nom, $birthdate, $sexe)
    {   
        parent::__construct($nom, $prenom, $birthdate, $sexe);
        $this->_castings = [];
    }

// Méthodes

    public function addCasting($_casting)
    {
        $this->_castings[] = $_casting;
    
    }
    
    
    public function afficherRole()
    {
        echo "<h3>".$this->_prenom." ".$this->_nom. " a joué le rôle de :</h3>";
        foreach ($this->_castings as $casting) {
            echo  $casting->get_role()." dans" .$casting->get_film()."<br>";
        }

    }
    
    public function afficherFilm()
    {
        echo "<h3>".$this->_prenom." ".$this->_nom. " a joué dans : </h3>";
        foreach ($this->_castings as $casting) {
            echo  $casting->get_film()."<br>";
        }

    }

    // GETTERS AND SETTERS

    public function get_castings()
    {
        return $this->_castings;
    }

    public function set_castings($_castings)
    {
        $this->_castings = $_castings;

        return $this;
    }
}
    


?>
<?php

class Acteur extends Personne{

// Déclaration propriété
    private array $_castings;

// Construct


    public function __construct($prenom, $nom, $birthdate, $sexe)
    {   
        parent::__construct($nom, $prenom, $birthdate, $sexe);
        $this->castings = [];
    }

// Méthodes

    public function addActeur(Film $film)
        {
            $this->_castings[] = $film;

        }

    function afficherRolesActeur(){
        echo "Rôles de l'acteur ".$this->_nom. " ".$this->_prenom."<br><br>";
        foreach ($this->_casting as $key => $value) {
            echo $key->infoFilms()."<br>";
        }
    
    
        

    
}

?>
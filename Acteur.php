<?php

class Acteur extends Personne{

// Déclaration propriété 
    private array $castings;

// Construct


    public function __construct($prenom, $nom, $birthdate, $sexe)
    {   
        parent::__construct($nom, $prenom, $birthdate, $sexe, $birthdate);
        $this->castings = [];
    }

// Méthodes

    public function infoActeur()
    {
        echo $this->_prenom." ".$this->_nom. " est de sexe ".$this->_sexe. " et est né le ".$this->_birthdate;

    }
    
}


?>
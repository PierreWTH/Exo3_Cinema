<?php

class Acteur extends Personne{

// Déclaration propriété 

private string $_role;

// Construct


    public function __construct($prenom, $nom, $birthdate, $sexe, $role)
    {   
        parent::__construct($nom, $prenom, $birthdate, $sexe, $birthdate, $role);
        $this->_role = $role;
    }

// Méthodes

    public function infoActeur()

    {

    echo $this->_prenom." ".$this->_nom. " est de sexe ".$this->_sexe. " et est né le ".$this->_birthdate. ". Il à déja joué le rôle de ".$this->_role. ".";

    }
        

}


?>

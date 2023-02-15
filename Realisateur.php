<?php

class Realisateur extends Personne{
 
    // Construct
    
    
        public function __construct($prenom, $nom, $birthdate, $sexe)
        {   
            parent::__construct($nom, $prenom,$birthdate, $sexe);
        }
    
    // Méthodes
    
        public function infoRealisateur()
    
        {
    
        echo $this->_prenom." ".$this->_nom. " est de sexe ".$this->_sexe. " et est né le ".$this->_birthdate.".<br>";
    
        }
            
    
    }
    
?>
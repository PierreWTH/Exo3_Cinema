<?php

class Personne{

// Déclaration des propriétés

    public string $_nom;
    public string $_prenom;
    public string $_sexe;
    public string $_birthdate;

    // Construct

    public function __construct(string $nom, string $prenom, string $sexe, string $birthdate)
    {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_sexe = $sexe;
            $this->_birthdate = $birthdate;

    }

    // Afficher informations de la Personne

    public function afficherInfos(){
        echo "<h3> Infos </h3>" .$this->_prenom." ".$this->_nom. " est de sexe " .$this->_sexe. " et il est né en " .$this->_birthdate. ".";
    }

    public function __toString()
    {
        return $this->get_prenom() . " " . $this->get_nom();
    }

    // GETTERS AND SETTERS

    // Prenom

    public function get_prenom()
    {
    return $this->_prenom;
    }

    
    public function set_prenom($_prenom)
    {
    $this->_prenom = $_prenom;

    return $this;
    }

    //Nom
    
    public function get_nom()
    {
    return $this->_nom;
    }

    
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }

    // Sexe
    
    public function get_sexe()
    {
        return $this->_sexe;
    }

    
    public function set_sexe($_sexe)
    {
        $this->_sexe = $_sexe;
        return $this;
    }

    //Birthdate

    public function get_birthdate()
    {
        return $this->_birthdate;
    }

    
    public function set_birthdate($_birthdate)
    {
        $this->_birthdate = $_birthdate;
        return $this;
    }
}

















?>
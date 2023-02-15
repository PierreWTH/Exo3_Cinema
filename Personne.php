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

public function __toString()
    {
        return $this->get_prenom() . " " . $this->get_nom();
    }

// Getters et Setters

/**
 * Get the value of _prenom
 */ 
public function get_prenom()
{
return $this->_prenom;
}

/**
 * Set the value of _prenom
 *
 * @return  self
 */ 
public function set_prenom($_prenom)
{
$this->_prenom = $_prenom;

return $this;
}

/**
 * Get the value of _nom
 */ 
public function get_nom()
{
return $this->_nom;
}

/**
 * Set the value of _nom
 *
 * @return  self
 */ 
public function set_nom($_nom)
{
$this->_nom = $_nom;

return $this;
}


/**
 * Get the value of _sexe
 */ 
public function get_sexe()
{
return $this->_sexe;
}

/**
 * Set the value of _sexe
 *
 * @return  self
 */ 
public function set_sexe($_sexe)
{
$this->_sexe = $_sexe;

return $this;
}

/**
 * Get the value of _birthdate
 */ 
public function get_birthdate()
{
return $this->_birthdate;
}

/**
 * Set the value of _birthdate
 *
 * @return  self
 */ 
public function set_birthdate($_birthdate)
{
$this->_birthdate = $_birthdate;

return $this;
}
}

















?>
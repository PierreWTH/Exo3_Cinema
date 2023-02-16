<?php

class Casting{

    private Film $_film;    
    private Role $_role;
    private Acteur $_acteur;

// Construct 

    public function __construct(Film $_film, Role $role, Acteur $acteur){
        $this->_film = $_film;
        $this->_role = $role;
        $this ->_acteur = $acteur;
        $this->_film->addCasting($this);
        $this->_role->addCasting($this);
        $this->_acteur->addCasting($this);
    }

    public function __toString()
    {
        return $this->get_film();
    }

// Getter & Setters Film
  
    public function get_film()
    {
        return $this->_film;
    }

   
    public function set_film($_film)
    {
        $this->_film = $_film;

        return $this;
    }

// Getter & Setters Role
 
    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($_role)
    {
        $this->_role = $_role;

        return $this;
    }

// Getter & Setters Acteur

    public function get_acteur()
    {
        return $this->_acteur;
    }

    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

        return $this;
    }
}


?>
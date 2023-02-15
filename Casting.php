<?php

class Castings{

    private Film $_film;    
    private Role $_role;
    private Acteur $_acteur;

// Construct 

    public function __construct(Film $_film, Role $role, Acteur $acteur){
        $this->_film = $_film;
        $this->_role = $role;
        $this ->_acteur = $acteur;
    }

    




}










?>
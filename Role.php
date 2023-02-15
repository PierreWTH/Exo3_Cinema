<?php

class Role {

private string $_role;
private Acteur $_acteur;
private Film $_film;
private array $_casting;


// Construct

public function __construct(string $role, Acteur $acteur, Film $film){

    $this->$_role = $role;
    $this->$_acteur = $acteur;
    $this->$_film = $film;
    $this->_castings =[];

}





}








?>
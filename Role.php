<?php

class Role {

    private string $_role;
    private array $_castings;


    //Construct

    public function __construct(string $role){

        $this->_role = $role;
        $this->_castings =[];

    }

    public function addCasting($_casting)
        {
            $this->_castings[] = $_casting;
        
        }


    // To string

    public function __toString()
    {
        return $this->get_role();
    }

    // GETTER & SETTERS

    // Role

    public function get_role()
    {
    return $this->_role;
    }


    public function set_role($_role)
    {
    $this->_role = $_role;

    return $this;
    }

    // Casting
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

    // 











?>
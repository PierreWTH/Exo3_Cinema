
<?php

class Film{

    // Déclaration des propriétés

    private string $_titre;
    private string $_datesortie;
    private int $_duree;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private Acteur $_acteur;
    private array $_castings;
    

    // Construct
    
        public function __construct(string $titre, string $datesortie, int $duree, string $synopsis, Realisateur $realisateur, Genre $genre)
        {
            $this->_titre = $titre;
            $this->_datesortie =$datesortie;
            $this->_duree = $duree;
            $this->_synopsis = $synopsis;
            $this->_realisateur = $realisateur;
            $this->_realisateur->addFilms($this);
            $this->_genre = $genre;
            $this->_genre->addFilm($this);
            $this->_castings = [];
        }
      
        
        public function addCasting($_casting)
        {
            $this->_castings[] = $_casting;
        }

        public function afficherCasting()
        {   
            $result = "<h3> Casting </h3>"; 
            if(count($this->_castings) == 0) {
                // message pas de casting
                $result .= "Pas de casting pour ce film !";
            } else {
                foreach ($this->_castings as $casting) {
                    $result .= $casting->get_role(). " est joué par ".$casting->get_acteur()."<br>";
                 }
            }   
            return $result;
        }

    
        public function infoFilms(){

            echo $this->_titre. " sorti en " .$this->_datesortie. " d'une durée de " .$this->_duree. " minutes, réalisé par " .$this->_realisateur. ". Synopsis : " .$this->_synopsis;


        }


    // TO STRING

    public function __toString()
    {
        return $this->_titre;
    }

    // GETTERS AND SETTERS
        
    // Titre

    public function get_titre()
    {
        return $this->_titre;
    }

    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    // Date sortie
    
    public function get_datesortie()
    {
        return $this->_datesortie;
    }

     
    public function set_datesortie($_datesortie)
    {
        $this->_datesortie = $_datesortie;

        return $this;
    }

    // Duree
    
    public function get_duree()
    {
        return $this->_duree;
    }

   
    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    // Synopsis

    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    
    public function set_synopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }

    // Realisateur
    
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    // Genre
  
    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    // Acteur
   
    public function get_acteur()
    {
        return $this->_acteur;
    }

    
    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

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

    

?>





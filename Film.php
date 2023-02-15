
<?php

class Film{

    // Déclaration des propriétés

    private string $_titre;
    private string $_datesortie;
    private int $_duree;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Genre $_genre;

    

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
        
        
        
    }
    
    public function infoFilms(){

        echo $this->_titre. " sorti en " .$this->_datesortie. " d'une durée de " .$this->_duree. " minutes, réalisé par " .$this->_realisateur. ". Synopsis : " .$this->_synopsis;


    }

}

    

?>





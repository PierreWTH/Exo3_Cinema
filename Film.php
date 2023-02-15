
<?php

class Film{

    // Déclaration des propriétés

    private string $_titre;
    private string $_datesortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_synopsis;

    // Construct
    
    public function __construct(string $titre, string $datesortie, int $duree, Realisateur $realisateur, string $synopsis)
    {
        $this->_titre = $titre;
        $this->_datesortie =$datesortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
    }

    
    public function infoFilm(){

        echo "Le titre du film est". $this->_titre. ", il est sorti le" .$this->_datesortie. " et a une duree de ".$this->_duree. " minutes. Le réalisateur est ".$this->_realisateur."<br>";
        echo "Voici le synopsis du film : ".$this->_synopsis;


    }

    




}

?>





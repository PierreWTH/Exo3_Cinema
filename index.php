<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

/* OBJECTIFS

Lister filmographie d'un réalisateur : OK
Lister films par genre : OK
Lister filmographie d'un acteur : A FAIRE

*/

// Création des instances

// Réalisateurs
$spielberg = new Realisateur("Steven", "Spielberg", "Masculin", "1968-05-19");
$nolan = new Realisateur("Christopher", "Nolan", "Masculin", "1976-07-22");
$mattreaves = new Realisateur("Matt", "Reaves", "Masculin", "1982-01-16");
$maryharron = new Realisateur("Mary", "Harron", "Masculin", "1961-08-11");

// Acteurs
$bale = new Acteur("Christian", "Bale", "Masculin", "1985-05-09");
$pattinson = new Acteur("Robert", "Pattinson", "Masculin", "1978-08-23");

// Genre

$fiction = new Genre("Fiction");
$drame = new Genre("Drame");

// Roles
$patrickbateman = new Role("Patrick Bateman");
$batman = new Role("Batman");



// Films

$darkknight = new Film("The Dark Knigh", "2007-12-23", 198, "Batman sauve la ville", $nolan, $fiction);
$titanic = new Film("Titanic", "1999-09-10", 220, "Bateau qui coule", $spielberg, $fiction);
$thebatman = new Film("The Batman", "2022-06-12", 214, "Batman depresif", $mattreaves, $fiction);
$americanpsycho = new Film("American Psycho", "1992-02-21", 178, "Tueur en serie", $maryharron, $drame);

// Casting 

$CastTheDarkKnight = new Casting($darkknight, $batman, $bale);
$CastThebatman = new Casting($thebatman, $batman, $pattinson);
$castAmericanPsycho = new Casting($americanpsycho, $patrickbateman, $bale);


$bale->afficherRole();
$fiction->afficherFilmsGenre();
$pattinson->afficherFilm();
$spielberg->afficherFilmsReal();
$spielberg -> afficherInfos();

echo $titanic->afficherCasting();

?>
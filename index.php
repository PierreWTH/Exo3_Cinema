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

// Acteurs
$bale = new Acteur("Christian", "Bale", "Masculin", "1985-05-09");

// Genre

$fiction = new Genre("Fiction");
$drame = new Genre("Drame");

// Roles

$batman = new Role("Batman", $bale, $darkknight);

// Films
$darkknight = new Film("The Dark Knigh", "2007-12-23", 198, "Batman sauve la ville", $nolan, $fiction);
$titanic = new Film("Titanic", "1999-09-10", 220, "Bateau qui coule", $spielberg, $fiction);
$shining = new Film("Shining", "1976-05-07", 180, "Manoir hanté", $spielberg, $fiction);
$fightclub = $film1 = new Film("Fight Club", "2021-03-12", 170, "Mec schyzophrène", $spielberg, $drame);
$fiction->afficherFilmsGenre();
$spielberg-> afficherFilmsReal();


?>
<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });


// Création des instances


$realisateur1 = new Realisateur("Steven", "Spielberg", "Masculin", "19/05/1968");
$acteur1 = new Acteur("Christian", "Bale", "Masculin", "19/05/1985", "Batman");

$realisateur1-> infoRealisateur();
$acteur1->infoActeur()

?>
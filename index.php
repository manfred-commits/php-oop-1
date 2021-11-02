<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once __DIR__. "./classes/Movie.php";
require_once __DIR__ . "/classes/Movie.php";

$avengersInfinityWar= new Movie("Avengers: Infinity War", 160, "Action/Sci-fi", "Russo Brothers");


$avengersEndGame= new Movie("Avengers: End Game", 182, "Action/Sci-fi", "Russo Brothers");

// var_dump(spl_object_id($avengersEndGame));

echo "<h2> Movie ".spl_object_id($avengersInfinityWar)." <br> Title of the movie: {$avengersInfinityWar->getTitle()} <br> Duration: {$avengersInfinityWar->getDuration()} <br> Genre: {$avengersInfinityWar->getGenre()} <br> Director/s: {$avengersInfinityWar->getDirector()} </h2>";

echo "<h2> Movie ".spl_object_id($avengersEndGame)." <br>Title of the movie: {$avengersEndGame->getTitle()} <br> Duration: {$avengersEndGame->getDuration()} <br> Genre: {$avengersEndGame->getGenre()} <br> Director/s: {$avengersEndGame->getDirector()} </h2>";


?>
<?php

require('Models/Connexion.php');

//Function returning all columns from a table in your database.

function listerFilms(){
    global $bdd;
    $listeFilms = $bdd->prepare('SELECT * FROM films');
    $listeFilms->execute();
    $listeFilms = $listeFilms->fetchAll();
    return $listeFilms;
    
};








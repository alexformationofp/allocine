<?php

require('Models/connexion.php');

function detaillerFilms($f){
    global $bdd;
    $detailsFilm = $bdd->prepare('SELECT * FROM films WHERE id=?');
    $detailsFilm->execute([$f]);
    $detailsFilm = $detailsFilm->fetchAll();
    return $detailsFilm;   
};


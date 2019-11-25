<?php

require('Models/connexion.php');

function detaillerFilm($f){
    global $bdd;
    $detailsFilm = $bdd->prepare('SELECT * FROM films WHERE id_films=?');
    $detailsFilm->execute([$f]);
    $detailsFilm = $detailsFilm->fetchAll()[0];
    // var_dump($detailsFilm);
    return $detailsFilm;   
};

function afficherActeurs($f){
    global $bdd;
    $acteurs = $bdd->prepare('SELECT * FROM acteurs INNER JOIN joue ON acteurs.id_acteurs = joue.id_films')
}


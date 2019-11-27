<?php

require('Models/connexion.php');

function detaillerActeur($f){
    global $bdd;
    $detailsActeur = $bdd->prepare('SELECT * FROM Acteurs WHERE id_Acteurs=?');
    $detailsActeur->execute([$f]);
    $detailsActeur = $detailsActeur->fetchAll()[0];
    // var_dump($detailsActeur);
    return $detailsActeur;   
};

function afficherFilms($f){
    global $bdd;
    $films = $bdd->prepare('SELECT * FROM films LEFT JOIN joue ON films.id_films = joue.id_films WHERE joue.id_acteurs = ?');
    $films->execute([$f]);
    $films = $films->fetchAll();
    return $films;
};
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
    $acteurs = $bdd->prepare('SELECT * FROM acteurs LEFT JOIN joue ON acteurs.id_acteurs = joue.id_acteurs WHERE joue.id_films = ?');
    $acteurs->execute([$f]);
    $acteurs = $acteurs->fetchAll();
    return $acteurs;
};

function afficherRealisateurs($f){
    global $bdd;
    $realisateurs = $bdd->prepare('SELECT * FROM realisateurs LEFT JOIN realise ON realisateurs.id_realisateurs = realise.id_realisateurs WHERE realise.id_films = ?');
    $realisateurs->execute([$f]);
    $realisateurs = $realisateurs->fetchAll();
    return $realisateurs;
}

function afficherGenres($f){
    global $bdd;
    $genres = $bdd->prepare('SELECT * FROM genres LEFT JOIN possede ON genres.id_genre = possede.id_genre WHERE possede.id_films = ?');
    $genres->execute([$f]);
    $genres = $genres->fetchAll();
    return $genres;
}
// SELECT * FROM acteurs LEFT JOIN joue ON acteurs.id_acteurs = joue.id_acteurs WHERE joue.id_films = 2;
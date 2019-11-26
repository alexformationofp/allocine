<?php
require('Models/connexion.php');

function ajouterFilm($titre, $date, $synopsis, $duree, $affiche){
    global $bdd;
    $ajoutFilm = $bdd->prepare('INSERT INTO films (titre, date, synopsis, duree, affiche) VALUES (:titre, :date, :synopsis, :duree, :affiche);');
    $ajoutFilm->execute([
        'titre' => $titre,
        'date' => $date,
        'synopsis' => $synopsis,
        'duree' => $duree,
        'affiche' => $affiche
    ]);
    $last_id = $bdd->query('SELECT LAST_INSERT_ID() as "0" FROM films where films.id_films = LAST_INSERT_ID();');
    $result = $last_id->fetch(PDO::FETCH_ASSOC)[0];
    return $result;
};

function recupererGenres(){
    global $bdd;
    $recupGenres = $bdd->query('SELECT * FROM genres');
    $recupGenres = $recupGenres->fetchAll();
    return $recupGenres;
};

function recupererActeurs(){
    global $bdd;
    $recupActeurs = $bdd->query('SELECT * FROM acteurs');
    $recupActeurs = $recupActeurs->fetchAll();
    return $recupActeurs;
};

function recupererRealisateurs(){
    global $bdd;
    $recupRealisateurs = $bdd->query('SELECT * FROM realisateurs');
    $recupRealisateurs = $recupRealisateurs->fetchAll();
    return $recupRealisateurs;
};


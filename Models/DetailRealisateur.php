<?php 

require('Models/Connexion.php');
function detaillerRealisateur($real){
    global $bdd;
    
    $details =$bdd->prepare('SELECT * FROM realisateurs WHERE id_realisateurs =?');
    $details->execute([$real]);    
    $details = $details->fetchAll();
    return $details;
};

function listerFilm($f){
   global $bdd;

    $film =$bdd->prepare('SELECT * FROM films LEFT JOIN realise ON films.id_films = realise.id_films WHERE realise.id_realisateurs =?');
    $film->execute([$f]);
    $film = $film->fetchAll();
    return $film;
};

<?php
if (isset($_GET['idFilm'])){
    $idFilm = $_GET['idFilm'];
};

require('Models/Film.php');

$detailsFilm = detaillerFilm($idFilm);
$acteursFilm = afficherActeurs($idFilm);
$realisateursFilm = afficherRealisateurs($idFilm);
$genresFilm = afficherGenres($idFilm);

require('Views/FilmView.php');

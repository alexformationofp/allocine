<?php
if (isset($_GET['idFilm'])){
    $idFilm = $_GET['idFilm'];
};

require('Models/Film.php');

$detailsFilm = detaillerFilm($idFilm);
$acteursFilm = afficherActeurs($idFilm);

require('Views/FilmView.php');

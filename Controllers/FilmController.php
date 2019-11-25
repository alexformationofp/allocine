<?php
if (isset($_GET['idFilm'])){
    $idFilm = $_GET['idFilm'];
};
require('Models/Film.php');

$detailsFilm = detaillerFilms($idFilm);

require('Views/FilmView.php');
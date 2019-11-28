<?php
session_start();
if (isset($_GET['idFilm'])){
    $idFilm = $_GET['idFilm'];
};

require('Models/Film.php');
if (isset($_SESSION['idUser'])){
    $idUser = $_SESSION['idUser'];
}


$detailsFilm = detaillerFilm($idFilm);
$acteursFilm = afficherActeurs($idFilm);
$realisateursFilm = afficherRealisateurs($idFilm);
$genresFilm = afficherGenres($idFilm);
$commentaires = afficherCommentaires($idFilm);
if (isset($_POST['commentaire'])) {
    $idUser = $_SESSION['idUser'];
    $commentaire = $_POST['commentaire'];
    $notation = $_POST['note'];
  
    envoyerCommentaire($commentaire,$notation,$idFilm,$idUser);
    // var_dump($idFilm);
    header('Location: index.php?page=Film&idFilm='.$idFilm);
};

require('Views/FilmView.php');

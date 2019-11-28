<?php
session_start();
require('Models/AjoutFilm.php');

//Cas où on a ajouté un film
if (isset($_POST['titre'])){
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $synopsis = $_POST['synopsis'];
    $duree = $_POST['duree'];
    $affiche = $_POST['affiche'];

    $last_id = ajouterFilm($titre, $date, $synopsis, $duree, $affiche);
    $recupActeurs = recupererActeurs();
    $recupRealisateurs = recupererRealisateurs();
    $recupGenres = recupererGenres();
    
};

// Cas où on a ajouté les détails d'un film
if(isset($_POST['last_id'])){


    // headers
    header("location:index.php?page=Film&idFilm=".$_POST['last_id']);
};

require('Views/AjoutFilmView.php');
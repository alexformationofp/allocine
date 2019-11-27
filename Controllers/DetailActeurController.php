<?php
if (isset($_GET['idActeur'])){
    $idActeur = $_GET['idActeur'];
};

require('Models/DetailActeur.php');

$detailsActeur = detaillerActeur($idActeur);
$listeFilms = afficherFilms($idActeur);

require('Views/DetailActeurView.php');
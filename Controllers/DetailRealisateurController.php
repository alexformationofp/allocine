<?php 
if(isset($_GET['idReal'])){
    $idReal = $_GET['idReal'];
};


require('Models/DetailRealisateur.php');

$details = detaillerRealisateur($idReal);
$films = listerFilm($idReal);

require('Views/DetailRealisateurView.php');
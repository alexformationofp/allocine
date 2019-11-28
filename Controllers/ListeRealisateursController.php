<?php 
session_start();
require('Models/ListeRealisateurs.php');

$detailsReal = detaillerReal();


require('Views/ListeRealisateursView.php');

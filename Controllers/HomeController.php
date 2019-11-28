<?php
session_start();
require('Models/Home.php');

$listeFilms = listerFilms();


// var_dump($listeFilms);
require('Views/HomeView.php');
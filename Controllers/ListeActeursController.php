<?php
session_start();
require('Models/ListeActeurs.php');

$listeActeurs = listerActeurs();

require('Views/ListeActeursView.php');
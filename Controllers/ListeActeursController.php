<?php

require('Models/ListeActeurs.php');

$listeActeurs = listerActeurs();

require('Views/ListeActeursView.php');
<?php

//Models
require('Models/Connexion.php');

function detaillerReal(){
    global $bdd;
    $detailsReal = $bdd->prepare('SELECT * FROM realisateurs');
    $detailsReal->execute();
    $detailsReal = $detailsReal->fetchAll();
    return $detailsReal;

};
